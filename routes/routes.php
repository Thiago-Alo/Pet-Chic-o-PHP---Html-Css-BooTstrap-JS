<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['p'])){
        $p = $_GET['p'];

        if($p=="inicio")
            include('content/pages/inicio.php');
        else if($p=="produtos")
            include('content/pages/produtos.php');
        else if($p=="contactos")
            include('content/pages/contactos.php');
        else if($p=="registro")
            include('content/contactos/registro.php');
        else if($p=="index")
            include('index.php');
    }
    else
        include('index.php');
}