<?php
include('conn.php');

if( !isset($_POST['user']) || !isset($_POST['email']) ||  !isset($_POST['pass']) || !isset($_POST['pass2'])){
    header('Location:../index.php?p=registo&res=invalido');
    exit();
}

$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if(empty($user) || empty($email) || empty($pass) || empty($pass2) || $pass!=$pass2){
    header('Location:../index.php');
    exit();
}
$sql = "INSERT INTO utilizador VALUES('$email','$user','$pass',2);";

if ($conn->query($sql) === TRUE) {
    header('Location:login.php');
} else {
    header('Location:../index.php?&res=erro');
}

$conn->close();
?>