<?php 
session_start();
if (empty($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
else{
    header("Location: claim.php");
    exit();
}
?>