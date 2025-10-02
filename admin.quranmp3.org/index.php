<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3 class="text-center mb-4">تسجيل الدخول</h3>
        <?php
        session_start();

        // Check if the user is already logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            header('Location: dashboard.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Hardcoded credentials
            $correctUsername = 'admin';
            $correctPassword = 'admin123456admin';

            if ($username === $correctUsername && $password === $correctPassword) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                // Set a cookie for authentication (valid for 1 day)
                setcookie('auth', true, time() + 86400, '/');

                header('Location: dashboard.php');
                exit;
            } else {
                echo '<div class="alert alert-danger text-center">اسم المستخدم أو كلمة المرور غير صحيحة</div>';
            }
        }
        ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="أدخل اسم المستخدم" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="أدخل كلمة المرور" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
