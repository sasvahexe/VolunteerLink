<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Подача заявления</title>
    <link rel="stylesheet" href="claim-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Shape.svg">
</head>
<body>
<?php 
session_start();
include('id.php');
$id = $_GET['id'];
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

<div class="form-style-5">

<?php
require('dbconnect.php');

session_start(); // Начать сессию

if (isset($_SESSION['user_id'])) { // Проверить, авторизован ли пользователь
    $user_id = $_SESSION['user_id']; // Получить айди авторизованного пользователя
} else {
    // Если пользователь не авторизован, выполнить соответствующие действия
}

if (isset($_REQUEST['submit'])) { // Изменить 'login' на 'submit', чтобы соответствовать имени кнопки отправки формы
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($mysqli, $name);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($mysqli, $lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($mysqli, $email);
    $event = stripslashes($_REQUEST['event']);
    $event = mysqli_real_escape_string($mysqli, $event);
    $description = stripslashes($_REQUEST['description']);
    $description = mysqli_real_escape_string($mysqli, $description);
    
    // Здесь вы можете выполнить запрос к базе данных для получения айди выбранного event
    // Пример:
    $query_event_id = "SELECT id FROM event WHERE name = '$event'";
    $result_event_id = mysqli_query($mysqli, $query_event_id);
    $row_event_id = mysqli_fetch_assoc($result_event_id);
    $event_id = $row_event_id['id'];

    $query_user_id = "SELECT * FROM users WHERE email = '$email'";
    $result_user_id = mysqli_query($mysqli, $query_user_id);
    $row_user_id = mysqli_fetch_assoc($result_user_id);
    $user_id = $row_user_id['id'];
    $login = $row_user_id['login'];
    
    
    // Затем вы можете выполнить запрос к базе данных для вставки данных в таблицу claim
    // Пример:
    $query = "INSERT INTO `claim` (id_user, name, lastname, email, login, event, description) 
                VALUES ( '$user_id', '$name', '$lastname', '$email', '$login', '$event_id', '$description')";
                $result_query = mysqli_query($mysqli, $query);
    
    // Этот код предполагает, что у вас есть переменная $user_id, содержащая айди авторизованного пользователя
    // и $event_id, содержащая айди выбранного event
    $result2 = $mysqli->query("SELECT * FROM claim WHERE description = '$description' ");
    $myrow2 = $result2->fetch_assoc();
    $id = $myrow2['id'];
    // Вставить код для выполнения запроса в базу данных здесь

    if ($myrow2 != null) {
        echo "<div class='register'>
        <h3>Вы успешно отправили заявку!</h3><br/>
        <p class='link'>Скоро на вашу почту придёт подробная информация.</a></p>
        <p class='link'>Перейти в <a href='account.php'>Личный кабинет.</a></p>
        </div>";
    } else {
        echo "<div class='register'>
        <h3>Обязательные поля отсутствуют.</h3><br/>
        <p class='link'>Перейти на <a href='claim.php'>Регистрацию</a> снова.</p>
        </div>";
    }
} else {
?>

    <form action="" method="post">
        
            <legend><h2 class="info">Подача заявления на Мероприятие</h2></legend>
            <legend><span class="number">1</span> Введите информацию о себе</legend>
            <input type="text" name="name" placeholder="Ваше имя *" required="required">
            <input type="text" name="lastname" placeholder="Ваша фамилия *" required="required">
            <input type="email" name="email" placeholder="Ваша почта *" required="required">
            <input type="text" id="login" name="login" placeholder="Ваш логин в Volunteer Link *" required="required">
            <label for="job">Мероприятие:</label>
            <select id="job" name="event">
            <optgroup label="Волгоград">
                <option value="Весенний Убор: <br>Чистота нашего города">Весенний Убор: Чистота нашего города</option>
            </optgroup>
            <optgroup label="Казань">
                <option value="День Доброты: <br>Подарим улыбку">День Доброты: Подарим улыбку</option>
            </optgroup>
            <optgroup label="Новосибирск">
                <option value="Тепло и Забота: <br>Помощь бездомным">Тепло и Забота: Помощь бездомным</option>
            </optgroup>
            </select>      
        <legend><span class="number">2</span> Дополнительная информация</legend>
        <textarea name="description" placeholder="Опыт в волонтерстве"></textarea>
        <input type="submit" name="submit" value="Отправить" />
    </form>
<?php
}
?>


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
</div></div>
</body>
</html>