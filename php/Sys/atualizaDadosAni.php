<?php
$id = $_POST['ctx_idanimal'];
$nomeani = $_POST['ctx_nomeani'];
$especie = $_POST['ctx_especie'];
$data = $_POST['ctx_dataani'];

include "ligaBD.php";

$query = "UPDATE tbl_animalcliente SET nome = '$nomeani', idtipo = '$especie', datanasc = '$data' WHERE idanimal = $id";


if(mysqli_query($liga,$query)){
    mysqli_close($liga);
    header("Location: ../animais.php");
    exit();
}else{
    echo "Erro: ".$query."<br>".mysqli_error($liga);
}
mysqli_close($liga);

?>