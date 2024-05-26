<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Link - Главная страница</title>
    <link rel="stylesheet" href="main-style.css">
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
<div class="main-container">
<div class="text-container">
<div class="main-text">
    <h1 class="title">Добро не знает границ — он объединяет нас.</h1>
    <p class="description">Присоединяйтесь к Volunteer Link и вместе мы сделаем больше,<br>чем когда-либо мечтали!</p>
</div>
<div class="button-container">
    <form action="register.php"><button class="volunteer-main-btn">Стать волонтером</button></form>
    <form action="register.php"><button class="organizer-main-btn">Стать организатором</button></form>
</div>
</div>
</div>

<div class="info-container">
    <div class="info-text-container">
        <div class="info-text">
            <h1 class="info-title">Добро пожаловать в волонтерский центр<br><span class="text-color">'Volunteer Link'!</span></h1>
            <p class="info-description">Наш центр предлагает разнообразные возможности для волонтеров всех возрастов и интересов.<br>Мы сотрудничаем с широким кругом организаций и инициатив, от благотворительных фондов и волонтерских групп до социальных проектов и экологических инициатив.</p>
        </div>
    
    </div>
</div>

<div class="banners-container">
    <div class="banners-text">
        <p class="url-banners">www.volunteerlink.ru</p>
        <div class="main-text-banners">
            <h1 class="one-text-banners">Ближайшие мероприятия</h1>
            <p class="two-text-bannners">Присоединяйтесь к нам в 'Volunteer Link' и станьте частью большой семьи волонтеров, меняющих мир к лучшему одним добрым поступком за другим.<br>Вместе мы сила!</p>
        </div>
        <div class="buttons-banners">
            <nav >
                <ul class="ul-buttons-banners">
                    <li class="li-buttons-banners"><a href="index.php" class="a-buttons-banners">Главная</a></li>
                    <img src="images/chevron-right.svg" alt="" class="image-buttons-banners">
                    <li class="li-buttons-banners"><a href="event.php" class="a-buttons-banners">Мероприятия</a></li>
                    <img src="images/chevron-right.svg" alt="" class="image-buttons-banners">
                    <li class="li-buttons-banners"><a href="#sub" class="a-buttons-banners">Отзывы</a></li>
                    <img src="images/chevron-right.svg" alt="" class="image-buttons-banners">
                    <li class="li-buttons-banners"><a href="#contact"  class="a-buttons-banners">Контакты</a></li>
                </ul>
            </nav>
            </div>
    </div>
</div>

<div class="cards-container">
    <div class="cards">
    <div class="card">
        <form action="event.php">
            <img src="images/Rectangle 2.png" alt="card-image" class="card-image">
            <div class="card-box">
            <div class="card-text">
                <p class="card-town">Москва</p>
                <h1 class="card-title">Дари Любовь:<br>Подарки для Детей</h1>
                <p class="card-info">Присоединяйтесь к благотворительному мероприятию "Дари Любовь: Подарки для Детей", организованному Детским Благотворительным Фондом "Сияние". Мы собираем подарки и пожертвования, чтобы сделать новогодний праздник незабываемым для детей из малообеспеченных семей. Присоединяйтесь к нам и подарите радость детям в этот праздничный сезон!</p>
            </div>
            <button class="card-button">Подробнее..</button>
            </div></form>
    </div>
    <div class="card">
        <form action="event.php">
            <img src="images/Rectangle 3.png" alt="card-image" class="card-image">
            <div class="card-box">
            <div class="card-text">
                <p class="card-town">Санкт - Петербург</p>
                <h1 class="card-title">Спасем Лес: <br>Посадим Деревья Вместе</h1>
                <p class="card-info">Присоединяйтесь к благотворительному мероприятию "Спасем Лес: Посадим Деревья Вместе", организованному Экологическим Фондом "Зеленый Мир". Мы собираем волонтеров для посадки новых деревьев и очистки лесных участков от мусора. Присоединяйтесь к нам в этом экологическом проекте и сделаем наш мир чище и зеленее!</p>
            </div>
            <button class="card-button">Подробнее..</button>
            </div></form>
    </div>
    <div class="card">
        <form action="event.php">
            <img src="images/Rectangle 1.png" alt="card-image" class="card-image">
            <div class="card-box">
            <div class="card-text">
                <p class="card-town">Казань</p>
                <h1 class="card-title">Теплые Руки: <br>Помощь Бездомным</h1>
                <p class="card-info">Присоединяйтесь к благотворительному мероприятию "Теплые Руки: Помощь Бездомным", организованному Обществом защиты бездомных животных "Спасибо за Любовь". Мы собираем одежду, еду и другие вещи для людей и животных, которые оказались бездомными. Присоединяйтесь к нам и помогите тем, кто нуждается в вашей заботе и поддержке!</p>
            </div>
            <button class="card-button">Подробнее..</button>
            </div></form>
    </div>
    </div>
    <div class="button-cards-container">
        <form action="event.php">
        <button class="button-card">Посмотреть все</button>
        </form>
    </div>
</div>

<div class="sub-container" id="sub">
    <div class="sub-text">
        <h1 class="sub-text-title">Оставь отзыв!</h1>
        <p class="sub-text-info">Мнения и впечатления - вот что скрыто внутри этого места. Раскройте его, чтобы узнать, что думают другие!</p>
    </div>
    <div class="sub-index">


<div class="forma">
<?php
require('dbconnect.php');

session_start(); // Начать сессию

if (isset($_SESSION['id'])) { // Проверить, авторизован ли пользователь
    $user_id = $_SESSION['id']; // Получить айди авторизованного пользователя
} else {
    // Если пользователь не авторизован, выполнить соответствующие действия
    echo "<div class='register'>
        <p class='link'><a href='login.php'>Авторизуйтесь для отправки отзыва!</a></p>
        </div>";
    
}

if (isset($_REQUEST['submit'])) { // Изменить 'login' на 'submit', чтобы соответствовать имени кнопки отправки формы
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($mysqli, $name);
    $user = stripslashes($_REQUEST['user']);
    $user = mysqli_real_escape_string($mysqli, $user);
    $description = stripslashes($_REQUEST['description']);
    $description = mysqli_real_escape_string($mysqli, $description);
    
    // Здесь вы можете выполнить запрос к базе данных для получения айди выбранного event
    // Пример:

    $query_user_id = "SELECT * FROM users WHERE login = '$login'";
    $result_user_id = mysqli_query($mysqli, $query_user_id);
    $row_user_id = mysqli_fetch_assoc($result_user_id);
    $user_id = $row_user_id['id'];
    $login = $row_user_id['login'];
    
    
    // Затем вы можете выполнить запрос к базе данных для вставки данных в таблицу claim
    // Пример:
    $query = "INSERT INTO `recall` (id_user, name, login, description) 
                VALUES ( '$user_id', '$name', '$user', '$description')";
                $result_query = mysqli_query($mysqli, $query);

    if ($result_query) {
        echo "<div class='register'>
        <h3>Вы успешно отправили отзыв!</h3><br/>
        <p class='link'>Перейти в <a href='account.php'>Личный кабинет.</a></p>
        </div>";
    } else {
        echo "<div class='register'>
        <h3>Вы не авторизованны.</h3><br/>
        <p class='link'>Перейти на <a href='index.php'>Главную страницу</a></p>
        </div>";
    }
} else {
?>
    <form action="" method="post">
    <div class="form-at">
        <div class="validate-input-at w-50" data-validate="Обязательное поле">
            <input class="input-at" type="text" name="name" placeholder="Иван И." />
            <span class="focus-input-at"></span>
        </div>
        <div class="validate-input-at w-50" data-validate="Обязательное поле">
            <input class="input-at" type="text" name="user" placeholder="Ваш логин" />
            <span class="focus-input-at"></span>
        </div>
        <div class="validate-input-at" data-validate="Обязательное поле">
            <textarea class="input-at" name="description" placeholder="Ваше сообщение"></textarea>
            <span class="focus-input-at"></span>
        </div>
        <input type="submit" name="submit" value="Отправить" id="submit-at" class="form-at-btn"/>
    </div>
    <div class="result-at"></div>
    </form>

<?php
}
?>

</div>
    </div>
</div>

<div class="recall-container">
    <div class="recall-text-container"><h1 class="recall-text-title">Отзывы от наших пользователей</h1></div>
    <div class="recall-two-container">

    <?php
        include ("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }
        $result = $mysqli->query
        ("SELECT * FROM recall WHERE id ='$id'");
        $result = mysqli_query($mysqli, "SELECT * FROM recall");
        $div = '<div class="recall-cards">';
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="recall-card">';
            $div .= '<img src="images/Group.svg" alt="" class="recall-img">';
            $id = $row
            ['id'];
            $div .= '<p class="recall-name">' . $row['name'] . '</p>';
            $div .= '<img src="images/Rating Group.svg" alt="" class="recall-star">';
            $div .= '<p class="recall-text">' . $row['description'] . '</p>';
            $div .= '</div>';
            $k++;

            if ($id == 3) {
                $div .= '</div>';
                break;
            }
        }
        $div .= '</div>';
        echo $div;
        ?>
        </div>
        <div class="recall-two-container">
            <?php
        include ("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }
        $result = $mysqli->query
        ("SELECT * FROM recall WHERE id ='$id'");
        $result = $mysqli->query("SELECT * FROM recall WHERE id >= 4 AND id <= 6");
        $div = '<div class="recall-cards">';
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="recall-card">';
            $div .= '<img src="images/Group.svg" alt="" class="recall-img">';
            $id = $row
            ['id'];
            $div .= '<p class="recall-name">' . $row['name'] . '</p>';
            $div .= '<img src="images/Rating Group.svg" alt="" class="recall-star">';
            $div .= '<p class="recall-text">' . $row['description'] . '</p>';
            $div .= '</div>';
            $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>
        </div>
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
</div>

</div>
</body>
</html>