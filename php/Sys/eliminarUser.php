<?php

$id = $_GET['id'];

include "ligaBD.php";

$query = "DELETE FROM tbl_cliente WHERE idcliente = $id";

if(mysqli_query($liga,$query)){
    echo "Registo Removido";
}else{
    echo "Erro: ".$query."<br>".mysqli_error($liga);
}
mysqli_close($liga);

?>