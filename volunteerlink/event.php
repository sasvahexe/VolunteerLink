<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Мероприятия</title>
    <link rel="stylesheet" href="event-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Shape.svg">
</head>
<body>
<?php 
session_start();
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
<div class="main">

<div class="info-container border-buttom">
    <div class="info-text-container">
        <div class="info-text">
            <h1 class="info-title">Добро пожаловать в волонтерский центр<br><span class="text-color">'Volunteer Link'!</span></h1>
            <p class="info-description">У нас вы найдете разнообразные возможности для участия в добрых делах и изменения мира к лучшему. Независимо от вашего уровня опыта и времени, которое вы готовы уделить, у нас есть мероприятия для всех. <br>Присоединяйтесь к нашим командам волонтеров и станьте частью полезного и вдохновляющего движения!</p>
        </div>
    </div>
</div>

<div class="main-conteiner">
<div class="main-content"><div class="footer-line"></div>

<?php
        include ("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }
        $result = $mysqli->query
        ("SELECT * FROM event WHERE id ='$id'");
        $result = mysqli_query($mysqli, "SELECT * FROM event");

        $div = "<div class='cards'>";
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="card line">';
            $div .= '<div class="image"><img class="image-2" src= ' . $row['photo'] . '></div>';
            $div .= '<div class="text-container">';
            $div .= '<h1 class="title">' . $row['name'] . '</h1>';
            $div .= '<p class="text">' . $row['description'] . '</p>';
            $div .= '</div>';
            $div .= '<div class="info-adress-container">';
            $div .= '<p class="adress size">' . $row['adress'] . '</p>';
            $div .= '<p class="number size">' . $row['number'] . '</p>';
            $div .= '<p class="date-time size">' . $row['date'] . '<br>' . $row['time'] . '</p>';
            $div .= '<form action="submit_application.php"><button class="button">Подать заявку</button></form>';
            $div .= '</div>';
            $div .= '</div>';
            $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>
</div>
</div>

<div class="footer-container">
    <div class="footer-content">
    <div class="footer-left">
        <img src="images/Logo.svg" alt="" class="footer-logo">
        <div class="buttons-footer">
            <nav >
                <ul class="ul-buttons-footer">
                    <li class="li-buttons-footer"><a href="index.php" class="a-buttons-footer">Главная</a></li>
                    <li class="li-buttons-footer"><a href="event.php" class="a-buttons-footer">Мероприятия</a></li>
                    <li class="li-buttons-footer"><a href="#sub" class="a-buttons-footer">Отзывы</a></li>
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
</div></div>
</body>
</html>