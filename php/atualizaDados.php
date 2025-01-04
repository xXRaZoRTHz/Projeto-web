<?php

$id = $_GET['id'];
$nome = $_POST['ctx_nome'];
$nif = $_POST['ctx_nif'];
$tel = $_POST['ctx_tel'];
$email = $_POST['ctx_email'];
$senha = $_POST['ctx_pass'];
$repass = $_POST['ctx_repass'];

include "ligaBD.php";

$query = "UPDATE tbl_cliente SET nome = '$nome', nif = '$nif', telefone = '$tel', email ='$email', senha ='$senha' WHERE idcliente = $id";

if(mysqli_query($liga,$query)){
    echo "Registo Atualizado";
}else{
    echo "Erro: ".$query."<br>".mysqli_error($liga);
}
mysqli_close($liga);

?>