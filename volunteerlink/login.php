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
                        <h1 class="title">Войти</h1>
                        <p class="form-text-register">Нету аккаунта? <a href="register.php" class="register-link">Зарегистрируйся!</a></p>
                    </div>
                    <div class="form-content">
                    <?php
    require('dbconnect.php');
    session_start();
    if (isset($_POST['login'])) {
        $login = stripslashes($_REQUEST['login']);
        $login = mysqli_real_escape_string($mysqli, $login);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        $query    = "SELECT * FROM `users` WHERE login='$login' AND password='$password'";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['login'] = $login;
            header("Location: dashboard.php");
        } else {
            echo "<div class='login'>
                    <h3>Неправильный логин или пароль.</h3><br/>
                    <p class='link'>Перейти на <a href='login.php'>Авторизацию</a> снова.</p>
                    </div>";
        }
    } else {
?>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" id="username" name="login" required="required" placeholder="Логин"/>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" required="required" placeholder="Пароль"/>
                            </div>
                            <div class="form-group">
                                <label class="form-remember">
                                <input type="checkbox"/>Запомнить меня
                                </label><a class="form-recovery" href="#">Забыли пароль?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button">Войти в аккаунт <img src="images/arrow-right.svg" alt="" class="image-button"></button>
                            </div>
                        </form>
                        <?php
    }
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>