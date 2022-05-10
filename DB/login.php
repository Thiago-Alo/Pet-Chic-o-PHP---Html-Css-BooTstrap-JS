<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

include('conn.php');

//$sql = "SELECT * FROM utilizador WHERE username='$user' AND password='$pass';";
//$sql="SELECT descricao FROM tipoutilizador WHERE id = (SELECT idTipoUtilizador FROM utilizador WHERE username='$user' AND password='$pass');";
$sql="SELECT utilizador.username, utilizador.password FROM utilizador 
WHERE utilizador.username='$user' AND utilizador.password='$pass'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username']=$user;

    header('Location:../index.php?p=inicio');
} else {
    header('Location:../index.php?p=index');
}
$conn->close();
?>