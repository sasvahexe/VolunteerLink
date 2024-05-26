<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Личный кабинет</title>
    <link rel="stylesheet" href="account-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Shape.svg">
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit();
    }
include('id.php');
?>
<header>
    <div class="logo-nav">
    <div class="logo">
        <img src="images/Logo.svg" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php"><img src="images/8666759_layers_layer_icon 1.svg" alt="">Главная</a></li>
            <li><a href="event.php"><img src="images/8666750_calendar_schedule_icon 1.svg" alt="">Мероприятия</a></li>
            <li><a href="index.php #sub"><img src="images/8666548_hash_icon 1.svg" alt="">Отзывы</a></li>
            <li><a href="#contact"><img src="images/8666783_book_education_icon 1.svg" alt="">Контакты</a></li>
        </ul>
    </nav>
    </div>
    <div class="auth-buttons">
    <?php 

$login = @ $_SESSION['login'];
if (empty($_SESSION['login']))

{

    ?>
    <form action="login.php"><button class="login-btn"><img src="images/5402435_account_profile_user_avatar_man_icon 1.svg" alt="">Войти</button></form>
        <form action="register.php"><button class="organizer-btn"><img src="images/5402435_account_profile_user_avatar_man_icon 2.svg" alt="">Стать волонтёром</button></form>
        <?php 
}
else {

    ?>
        <form action="account.php"><button class="login-btn"><img src="images/5402435_account_profile_user_avatar_man_icon 1.svg" alt="">Личный кабинет</button></form>
        <form action="logout.php"><button class="organizer-btn"><img src="images/5402435_account_profile_user_avatar_man_icon 2.svg" alt="">Выйти из аккаунта</button></form>
        <?php 
}

    ?>
    </div>
</header>
        <?php
        include ('dbconnect.php');
        include ('id.php');
        
        $result = $mysqli->query("SELECT * FROM users WHERE login ='$login';");
        $row = mysqli_fetch_assoc($result);
            $div .= '<div class="main">';
            $div .= '<div class="main-container">';
            $div .= '<div class="card-container">';
            $div .= '<div class="photo-container">';
            $div .= '<div class="content">';
            $div .= '<div class="m-b-25"><img src="images/Group 2.svg" class="img-radius" alt="User-Profile-Image"></div>';
            $div .= '<h2 class="card-name">' . $row['name'] . ' ' . $row['lastname'] . '</h2>';
            $div .= '<p class="login">' . $row['login'] . '</p>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '<div class="info-container">';
            $div .= '<h2 class="title">Информация</h2>';
            $div .= '<div class="row">';
            $div .= '<div class="container">';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Почта</p>';
            $div .= '<h6 class="text">'. $row['email'] . '</h6>';
            $div .= '</div>';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Номер</p>';
            $div .= '<h6 class="text">' . $row['number'] . '</h6>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '<div class="container">';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Дата рождения</p>';
            $div .= '<h6 class="text">' . $row['date'] . '</h6>';
            $div .= '</div>';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Город</p>';
            $div .= '<h6 class="text">' . $row['city'] . '</h6>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '<div class="container">';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Образование</p>';
            $div .= '<h6 class="text">' . $row['education'] . '</h6>';
            $div .= '</div>';
            $div .= '<div class="block-info">';
            $div .= '<p class="title-text">Страна</p>';
            $div .= '<h6 class="text">' . $row['country'] . '</h6>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
            $div .= '</div>';
        echo $div;
        ?> 

<div class="footer-container">
    <div class="footer-content">
    <div class="footer-left">
        <img src="images/Logo.svg" alt="" class="footer-logo">
        <div class="buttons-footer">
            <nav >
                <ul class="ul-buttons-footer">
                    <li class="li-buttons-footer"><a href="index.php" class="a-buttons-footer">Главная</a></li>
                    <li class="li-buttons-footer"><a href="event.php" class="a-buttons-footer">Мероприятия</a></li>
                    <li class="li-buttons-footer"><a href="index.php #sub" class="a-buttons-footer">Отзывы</a></li>
                    <li class="li-buttons-footer"><a href="#contact"  class="a-buttons-footer">Контакты</a></li>
                </ul>
            </nav>
            </div>
    </div>
    <div class="footer-right" id="contact">
        <p class="footer-mail">volunteerlink@mail.ru</p>
        <p class="footer-number">+7 (900) 800-70-50</p>
    </div>
</div>
    <div class="footer-line-container">
    <div class="footer-line"></div>
    <div class="footer-copyright">
        <p class="copyright-text">© 2024 Volunteer Link</p>
    </div>
    </div>
</div>
</body>
</html>