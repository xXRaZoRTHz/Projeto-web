<?php
session_start();
$idcliente = $_SESSION['id_usuario'];
$idanimal= $_SESSION ['id_animal'];
$idservico = $_POST['servico'];
$data = $_POST['date'];
$hora = $_POST['time'];


$query = "INSERT INTO tbl_factoagendamento (data, hora, idcliente, idanimal, idservico)
VALUES ('$data', '$hora', '$idcliente', '$idanimal', '$idservico')";
include 'ligaBD.php';
if(mysqli_query($liga,$query)){
    mysqli_close($liga);
    header("Location: ../agendamentos.php");
    exit();
}else{ 
    echo "<script>alert('Erro:'".mysqli_query_error().");</script>";
    mysqli_close($liga);
}

?>