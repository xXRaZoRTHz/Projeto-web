<?php
    $id = $_GET['id'];
    include 'ligaBD.php';
    $query = "SELECT * FROM tbl_cliente WHERE idcliente = $id";
    $resultado = mysqli_query($liga,$query);
    $row = mysqli_fetch_assoc($resultado);
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 1</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<header></header>
	<main>
    <div id="registo" style="width:80%;margin-left: 10%;">
			<form id="form_registo" method="POST" action="atualizaDados.php?id=<?= $row['idcliente']; ?>">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<label for="idnome" class="form-label">Nome:</label>
						<input type="text" id="idnome" class="form-control" name="ctx_nome" placeholder="Insira o seu nome" required maxlength="50" value="<?=$row['nome']; ?>">
					</div>
				</div>
				</div>
                <div class="row">
					<div class="col-md-6 col-sm-12">
						<label for="idnif" class="form-label">Nif:</label>
						<input type="text" id="idnif" class="form-control" name="ctx_nif" placeholder="Insira o seu Nif" required maxlength="9" minlength="9" value="<?=$row['nif']; ?>">
					</div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="idtel" class="form-label">Telefone:</label>
                            <input type="text" id="idtel" class="form-control" name="ctx_tel" placeholder="Insira o seu Telefone" required maxlength="9" value="<?=$row['telefone']; ?>">
                        </div>
                    </div>
				<div class="row">
					<label for="idemail" class="form-label">Email:</label>
					<input type="email" id="email" class="form-control" name="ctx_email" placeholder="Insira uma conta de email válida" required maxlength="50" value="<?=$row['email']; ?>">
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<label for="idpass" class="form-label">Senha:</label>
						<input type="password" id="idpass" class="form-control" name="ctx_pass" placeholder="Insira uma Senha" required maxlength="50" minlength="8" value="<?=$row['senha']; ?>">
					</div>
					<div class="col-md-6 col-sm-12">
						<label for="idrepass" class="form-label">Reescreva Senha:</label>
						<input type="password" id="idrepass" class="form-control" name="ctx_repass" placeholder="Reescreva a Senha" required maxlength="50" minlength="8">
					</div>
				</div>
				<p style="text-align: center;">
					<input type="submit" class="btn btn-success" name="btn_regista" value="Registar Dados">
					<input type="reset" class="btn btn-danger" name="btn_reset" value="Limpar Formulário">
				</p>
			</form>
		</div>
    </main>
</body>
</html>