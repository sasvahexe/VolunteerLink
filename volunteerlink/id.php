<?php
if (isset($_GET['id'])){
    global $valid;
    $valid = $_GET['id'];
    $login = $_SESSION['login'];
}
$GLOBALS['id'] = $valid;
$GLOBALS['login'] = $login;
?>