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

// Pagination variables
$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search functionality
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM books";
$params = [];

if ($search) {
    $query .= " WHERE title LIKE :search";
    $params[':search'] = "%$search%";
}

$query .= " LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value, PDO::PARAM_STR);
}
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total books count
$totalQuery = "SELECT COUNT(*) FROM books";
if ($search) {
    $totalQuery .= " WHERE title LIKE :search";
}
$totalStmt = $pdo->prepare($totalQuery);
foreach ($params as $key => $value) {
    $totalStmt->bindValue($key, $value, PDO::PARAM_STR);
}
$totalStmt->execute();
$totalBooks = $totalStmt->fetchColumn();
$totalPages = ceil($totalBooks / $limit);

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الكتب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            padding: 15px;
        }
        .pagination {
            margin-top: 20px;
        }
        .no-results {
            font-size: 1.2em;
            color: #666;
            margin-top: 20px;
        }
        .header-bar {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .header-bar h1 {
            margin: 0;
            font-size: 1.8em;
        }
        .btn-primary {
            background-color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-bar text-center">
            <h1>إدارة الكتب</h1>
        </div>

        <!-- Search Bar -->
        <form class="mb-4" method="GET" action="">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="ابحث عن كتاب" value="<?php echo htmlspecialchars($search); ?>">
                <button class="btn btn-primary">بحث</button>
            </div>
        </form>

        <!-- Book List -->
        <div class="row">
            <?php if (count($books) > 0): ?>
                <?php foreach ($books as $book): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <?php if (!empty($book['image'])): ?>
                                <img src="<?php echo htmlspecialchars($book['image']); ?>" class="card-img-top" alt="صورة الكتاب">
                            <?php else: ?>
                                <img src="placeholder.jpg" class="card-img-top" alt="صورة افتراضية">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($book['title'] ?: 'بدون عنوان'); ?></h5>
                                <p class="card-text"><strong>المؤلف:</strong> <?php echo htmlspecialchars($book['author_name'] ?: 'غير معروف'); ?></p>
                                <p class="card-text"><strong>الناشر:</strong> <?php echo htmlspecialchars($book['publisher'] ?: 'غير معروف'); ?></p>
                                <a href="edit.php?id=<?php echo $book['id']; ?>" class="btn btn-warning btn-sm">تعديل</a>
                                <a href="delete.php?id=<?php echo $book['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">حذف</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center no-results">لا توجد كتب لعرضها</div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page - 1; ?>&search=<?php echo htmlspecialchars($search); ?>" aria-label="السابق">
                            &laquo;
                        </a>
                    </li>
                <?php endif; ?>

                <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++): ?>
                    <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo htmlspecialchars($search); ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>&search=<?php echo htmlspecialchars($search); ?>" aria-label="التالي">
                            &raquo;
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
