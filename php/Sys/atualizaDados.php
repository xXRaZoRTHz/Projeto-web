<?php

$id = $_GET['id'];
$nome = $_POST['ctx_nome'];
$tel = $_POST['ctx_tel'];
$email = $_POST['ctx_email'];
$senha = $_POST['ctx_pass'];
$repass = $_POST['ctx_repass'];

include "ligaBD.php";

$query = "UPDATE tbl_cliente SET nome = '$nome', telefone = '$tel', email ='$email', senha ='$senha' WHERE idcliente = $id";

if(mysqli_query($liga,$query)){
    mysqli_close($liga);
    header("Location: ../perfiluser.php");
    exit();
}else{
    echo "Erro: ".$query."<br>".mysqli_error($liga);
}
mysqli_close($liga);
?>