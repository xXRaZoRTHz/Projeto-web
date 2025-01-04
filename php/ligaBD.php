<?php

$server = "localhost";
$user = "root";
$pass = "251212lucas123";
$bd = "bdvet";

$liga = mysqli_connect($server,$user,$pass,$bd);
if(!$liga){
    echo "<script>alert('Erro ao tentar ligar á base de dados!');</script>";
    die('Erro:'.mysqli_connect_error());
}

?>