<?php 

$id = $_GET['id'];
$nome = $_POST['ctx_nome'];
$nif = $_POST['ctx_nif'];
$tel = $_POST['ctx_tel'];
$email = $_POST['ctx_email'];
$senha = $_POST['ctx_pass'];
$repass = $_POST['ctx_repass'];

if($senha != $repass){
    echo "<script> 
            alert('As Passwords não coincidem!');
            window.location.href = '../index.html';
        </script>";
}else{
    $query = "INSERT INTO tbl_cliente(nome, nif, telefone, email, senha)
    VALUES('$nome', '$nif', '$tel', '$email', '$senha')";
    include 'ligaBD.php';
    if(mysqli_query($liga,$query)){
        echo "<script>alert('Registo inserido com sucesso!');
        </script>";
    }else{ 
        echo "<script>alert('Erro:'".mysqli_query_error().");</script>";
    }
    mysqli_close($liga);
}


?>