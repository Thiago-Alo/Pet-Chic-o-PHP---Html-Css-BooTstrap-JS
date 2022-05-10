<?php
session_start();
if(!isset ($_SESSION['email']) || empty($_SESSION['email'])){
    header('Location: index.php');
    exit();
}

include('content/master/head.php');
include('content/master/header.php');

include('routes/routes.php');

include('content/master/footer.php');
?>

