<link rel="stylesheet" href="index.php">

<?php

require_once 'ligaBD.php';

session_start();

if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($liga, $_POST['email']);
    $senha1 = mysqli_escape_string($liga, $_POST['senha1']);

    if(empty($login) or empty($senha1)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT email FROM tbl_cliente WHERE email = '$login'";
        $resultado1 = mysqli_query($liga, $sql);

        if(mysqli_num_rows($resultado1) > 0):
            $sql = "SELECT * FROM tbl_cliente WHERE email = '$login' AND senha = '$senha1'";
            $resultado1 = mysqli_query($liga, $sql);

                if(mysqli_num_rows($resultado1) == 1):
                    $dados = mysqli_fetch_array($resultado1);
                    mysqli_close($liga);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['idcliente'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li> Usuário e senha não conferem </li>";
        endif;
        else:
            $erros[] = "<li> Usuario Inexistente </li>";
        endif;
    endif;

endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1> Login </h1>
<?php
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
    endif;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<hr>
Email: <input type="text" name="email"><br>
Senha: <input type="password" name="senha1"><br>
<button type="submit" name="btn-entrar"> Entrar </button>
</form>
</body>
</html>
