<?php
session_start(); 
$nome = $_POST['ctx_nome'];
$tel = $_POST['ctx_tel'];
$email = $_POST['ctx_email'];
$senha = $_POST['ctx_pass'];
$repass = $_POST['ctx_repass'];

if($senha != $repass){
    echo "<script> 
            alert('As Passwords não coincidem!');
            window.location.href = '../registar.php';
        </script>";
}else{
    $query = "INSERT INTO tbl_cliente(nome, telefone, email, senha)
    VALUES('$nome', '$tel', '$email', '$senha')";
    include 'ligaBD.php';
    if(mysqli_query($liga,$query)){
        $_SESSION["mensagem_sucesso"] = "Utilizador registrado com sucesso!";
        mysqli_close($liga);
        header("Location: ../login.php");
        exit();
    }else{ 
        echo "<script>alert('Erro:'".mysqli_query_error().");</script>";
        mysqli_close($liga);
    }
}
?>