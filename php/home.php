<?php
//conexão
require_once 'ligaBD.php';

//sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbl_cliente WHERE idcliente = '$id'";
$resultado1 = mysqli_query($liga, $sql);
$dados = mysqli_fetch_array($resultado1);
mysqli_close($liga);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina restrita</title>
</head>
<body>
<h1>Olá <?php echo $dados['nome']; ?> </h1>
<a href="logout.php">Sair</a>
</body>
</html>