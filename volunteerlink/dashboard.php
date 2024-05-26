<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Авторизация</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Shape.svg">
</head>
<body>
    <div class="main-container">
        <div class="main-logo">
            <img src="images/Logo 2.svg" alt="" class="logo">
        </div>

        <div class="main-form">
            <div class="form">
                <div class="form-panel">
                    <div class="form-header">
                        <img src="images/Shape.svg" alt="" class="form-logo">
                        <h1 class="title">Добро пожаловать <?php echo $_SESSION['login']; ?>!</h1>
                        <p class="form-text-register"><a href="index.php">Главная страница</a></p>
                        <p class="form-text-register"><a href="account.php">Перейти в личный кабинет</a></p>
                        <p class="form-text-register"><a href="logout.php">Выйти из системы</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>