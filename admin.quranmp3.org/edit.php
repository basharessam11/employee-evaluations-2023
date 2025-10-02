<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php'); // Redirect to login page
    exit;
}

// Database connection
    $host = '127.0.0.1';  
        $dbname = 'site'; 
        $username = 'i10187425_root'; 
        $password = 'xdLf8s+un;CB';
        $dsn = 'mysql:host=localhost;dbname=site;charset=utf8mb4';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Get book ID
$bookId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch subcategories for the book
$limit = 3;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$subcategoriesStmt = $pdo->prepare(
    "SELECT bs.subcategory_id AS current_subcategory_id, sc.name AS subcategory_name, sc.description
    FROM book_subcategories bs
    INNER JOIN subcategories sc ON bs.subcategory_id = sc.id
    WHERE bs.book_id = :book_id
    LIMIT :limit OFFSET :offset"
);
$subcategoriesStmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
$subcategoriesStmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$subcategoriesStmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$subcategoriesStmt->execute();
$subcategories = $subcategoriesStmt->fetchAll(PDO::FETCH_ASSOC);

$totalStmt = $pdo->prepare("SELECT COUNT(*) FROM book_subcategories WHERE book_id = :book_id");
$totalStmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
$totalStmt->execute();
$totalRecords = $totalStmt->fetchColumn();
$totalPages = ceil($totalRecords / $limit);

// Update subcategories in book_subcategories
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['subcategories'] as $currentSubcategoryId => $newSubcategoryId) {
        $updateStmt = $pdo->prepare(
            "UPDATE book_subcategories SET subcategory_id = :new_subcategory_id WHERE book_id = :book_id AND subcategory_id = :current_subcategory_id"
        );
        $updateStmt->bindValue(':new_subcategory_id', $newSubcategoryId, PDO::PARAM_INT);
        $updateStmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
        $updateStmt->bindValue(':current_subcategory_id', $currentSubcategoryId, PDO::PARAM_INT);
        $updateStmt->execute();
    }

    header("Location: edit.php?id=$bookId&page=$page&message=تم تحديث التصنيفات الفرعية بنجاح.");
    exit;
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل التصنيفات الفرعية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">تعديل التصنيفات الفرعية</h1>

        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success"> <?php echo htmlspecialchars($_GET['message']); ?> </div>
        <?php endif; ?>

        <form method="POST" action="">
            <?php foreach ($subcategories as $subcategory): ?>
                <div class="mb-3">
                    <label for="subcategory_<?php echo $subcategory['current_subcategory_id']; ?>" class="form-label">التصنيف الفرعي الحالي</label>
                    <input type="text" class="form-control" id="subcategory_<?php echo $subcategory['current_subcategory_id']; ?>" value="<?php echo htmlspecialchars($subcategory['subcategory_name']); ?>" disabled>

                    <label for="new_subcategory_<?php echo $subcategory['current_subcategory_id']; ?>" class="form-label">اختر التصنيف الفرعي الجديد</label>
                    <select class="form-control" id="new_subcategory_<?php echo $subcategory['current_subcategory_id']; ?>" name="subcategories[<?php echo $subcategory['current_subcategory_id']; ?>]">
                        <?php
                        $allSubcategoriesStmt = $pdo->query("SELECT id, name FROM subcategories");
                        $allSubcategories = $allSubcategoriesStmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($allSubcategories as $option): ?>
                            <option value="<?php echo $option['id']; ?>" <?php echo $option['id'] == $subcategory['current_subcategory_id'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($option['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php endforeach; ?>

            <!-- Pagination for subcategories -->
            <nav>
                <ul class="pagination justify-content-center">
                    <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?id=<?php echo $bookId; ?>&page=<?php echo $page - 1; ?>">السابق</a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                            <a class="page-link" href="?id=<?php echo $bookId; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?id=<?php echo $bookId; ?>&page=<?php echo $page + 1; ?>">التالي</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>

            <button type="submit" class="btn btn-primary">تحديث</button>
            <a href="dashboard.php" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
