<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Регистрация</title>
    <link rel="stylesheet" href="register-style.css">
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
                        <h1 class="title">Добро пожаловать в Volunteer Link</h1>
                        <p class="form-text-register">Заполните свою учетную запись</p>
                    </div>
                    <div class="form-content">

                    <?php
    require('dbconnect.php');
    if (isset($_REQUEST['login'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($mysqli, $name);
        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($mysqli, $lastname);
        $date = stripslashes($_REQUEST['date']);
        $date = mysqli_real_escape_string($mysqli, $date);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($mysqli, $city);
        $number = stripslashes($_REQUEST['number']);
        $number = mysqli_real_escape_string($mysqli, $number);
        $country = stripslashes($_REQUEST['country']);
        $country = mysqli_real_escape_string($mysqli, $country);
        $education = stripslashes($_REQUEST['education']);
        $education = mysqli_real_escape_string($mysqli, $education);
        $login = stripslashes($_REQUEST['login']);
        $login = mysqli_real_escape_string($mysqli, $login);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($mysqli, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        $query    = "INSERT into `users` (name, lastname, date, city, number, country, education, email, login, password)
                        VALUES ('$name', '$lastname', '$date', '$city', '$number', '$country', '$education', '$email', '$login', '$password')";
        $result   = mysqli_query($mysqli, $query);
        if ($result) {
            echo "<div class='register'>
                    <h3>Вы успешно зарегистрированы!</h3><br/>
                    <p class='link'>Перейти на <a href='login.php'>Авторизацию.</a></p>
                    </div>";
        } else {
            echo "<div class='register'>
                    <h3>Обязательные поля отсутствуют.</h3><br/>
                    <p class='link'>Перейти на <a href='register.php'>Регистрацию</a> снова.</p>
                    </div>";
        }
    } else {
?>

                        <form action="" method="post">
                            <div class="form-group-container">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" required="required" placeholder="Имя *"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="last_name" name="lastname" required="required" placeholder="Фамилия *"/>
                                </div>
                            </div>
                            <div class="form-group-container">
                                <div class="form-group">
                                    <input type="text" id="date" name="date" placeholder="Дата рождения"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="city" name="city" placeholder="Город"/>
                                </div>
                            </div>
                            <div class="form-group-container">
                                <div class="form-group">
                                    <input type="nubmer" id="number" name="number" required="required" placeholder="Номер телефона *"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="country" name="country" placeholder="Страна"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" id="education" name="education" placeholder="Образование"/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" required="required" placeholder="Почта *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="username" name="login" required="required" placeholder="Логин *"/>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" required="required" placeholder="Пароль *"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button">Зарегистрироваться <img src="images/arrow-right.svg" alt="" class="image-button"></button>
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