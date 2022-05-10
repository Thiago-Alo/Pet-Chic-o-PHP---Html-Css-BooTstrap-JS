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

if(empty($user) || empty($pass) || empty($pass2) || $pass!=$pass2){
    header('Location:../index.php?p=registo&res=passnaocorresponde');
    exit();
}
$sql = "INSERT INTO utilizador VALUES('$user','$email','$pass');";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=login&res=registook');
} else {
    header('Location:../index.php?p=registo&res=erro');
}

$conn->close();
?>