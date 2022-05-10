<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];

include('conn.php');

//$sql = "SELECT * FROM utilizador WHERE username='$user' AND password='$pass';";
//$sql="SELECT descricao FROM tipoutilizador WHERE id = (SELECT idTipoUtilizador FROM utilizador WHERE username='$user' AND password='$pass');";
$sql="SELECT utilizador.email, utilizador.password, tipoUtilizador.descricao FROM utilizador, tipoUtilizador
WHERE utilizador.email='$email' AND utilizador.password='$pass' AND utilizador.idTipoUtilizador = tipoUtilizador.id";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['email']=$email;
    $_SESSION['tipo']=$row['descricao'];

    header('Location:../home.php?p=inicio');
} else {
    header('Location:../index.php');
}
$conn->close();
?>