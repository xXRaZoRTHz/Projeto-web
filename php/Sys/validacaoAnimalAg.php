<?php
$nomeani = $_POST['ctx_nomeani'];
$iddono = $_SESSION['id_usuario'];
$especie = $_POST['ctx_especie'];
$data = $_POST['ctx_dataani'];
    $query = "INSERT INTO tbl_animalcliente(nome, idcliente, idtipo, datanasc)
    VALUES('$nomeani', '$iddono', '$especie', '$data')";
    include 'ligaBD.php';
    if(mysqli_query($liga,$query)){
        mysqli_close($liga);
        header("Location: ../agendar.php");
        exit();
    }else{ 
        echo "<script>alert('Erro:'".mysqli_query_error().");</script>";
        mysqli_close($liga);
    }
?>