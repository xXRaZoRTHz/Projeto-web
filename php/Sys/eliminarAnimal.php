<?php

$id = $_GET['id'];

include "ligaBD.php";

$query = "DELETE FROM tbl_animalCliente WHERE idanimal = $id";

if(mysqli_query($liga,$query)){
    header('Location: ../animais.php');
    exit();
}else{
    echo "Erro: ".$query."<br>".mysqli_error($liga);
}
mysqli_close($liga);

?>