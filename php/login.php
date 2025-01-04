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
                    header('Location: perfiluser.php');
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
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Oliveira, Lucas Lacerda e Tasmini Satar">
    <meta name="description" content="Clínica Veterinária Online">
    <!-- se quiserem adicionar mais keywords, fiquem a vontade -->
    <meta name="keywords" content="clínica veterinária,clínica veterinária em Lisboa,veterinário em Lisboa, atendimento veterinário, consulta veterinária, saúde animal, cuidados com animais, veterinário, vacinação de pets, emergência veterinária, cirurgia veterinária, hospital veterinário, clínica veterinária perto de mim, exames laboratoriais para pets, veterinário especializado, pet shop, cuidados com cães e gatos, exames veterinários, clínica para pets, saúde de cães e gatos, veterinário 24h, atendimento de emergência para animais, consultas veterinárias para cães e gatos">

    <meta name="robots" content="follow">
    <title>VetWorld</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../javascript/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../javascript/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="sticky-top">
    <section>
        <div class="d-flex justify-content-between align-items-center pt-3 container position-top">
            <!-- Navbar -->
            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg">
                    <div class="text-center navbar-brand">
                         <a href="index.php">
                        <img src="../img/principais/logo.png" class="img-fluid" style="max-height: 100px; min-height: 75px;" alt="logo da clínica VetWorld">
                        </a>
                    <h1 class="text-white border-text">Vet<span class="text-info">World</span></h1>
                    </div>
                    
                    <!-- Botão de menu hamburguer-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menu de navegação -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav gap-5">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Agende Agora</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contatos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fale conosco</a>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group" role="group">
                                    <button type="button" id="dropdownMenuButton" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="../img/principais/pt.png" alt="Bandeira de Portugal" style="width: 30px; height: 20px;">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">
                                                <img src="../img/principais/us.png" alt="Bandeira dos EUA" style="width: 30px; height: 20px;"> Estados Unidos
                                            </a></li>
                                        <li><a class="dropdown-item" href="#">
                                                <img src="../img/principais/es.png" alt="Bandeira da Espanha" style="width: 30px; height: 20px;"> Espanha
                                            </a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                                
                    </div>
                </nav>
            </div>
        <!-- Carrinho e Login -->
            <div class="d-flex gap-4">
                <div class="text-center">
                    <a href="">
                        <img src="../img/principais/shopping-cart.png" class="img-fluid" style="max-width: 50px;" alt="Carrinho">
                    </a>
                    <p class="mt-2">Carrinho</p>
                </div>
                <div class="text-center">
                    <a href="">
                        <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="Login">
                    </a>
                    <p class="mt-2">Login</p>
                </div>
            </div>
        </div>
    </section>
</header>
    <main>
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">>
              <div class="login">
                <h1 class="text-center mb-5">Login</h1>
                <?php
                    if(!empty($erros)):
                        foreach($erros as $erro):
                            echo $erro;
                        endforeach;
                    endif;
                ?>
                <div class="row g-1 mb-3 ms-5 align-items-center">
                  <div class="col-3">
                    <label for="inputEmail" class="col-form-label" style="min-width: 200px;">Email</label>
                  </div>
                  <div class="col-auto">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="exemplo@email.com">
                  </div>
                </div>
                <div class="row g-1 mb-3 ms-5 align-items-center">
                  <div class="col-3">
                    <label for="Password" class="col-form-label" style="min-width: 100px;">Password</label>
                  </div>
                  <div class="col-auto">
                    <input type="password" name="senha1" id="Password" class="form-control" placeholder="Senha">
                  </div>
                </div>
                <div class="mb-3 ms-5">
                  <a href="redefsenha.html">Esqueci a palavra passe</a>
                </div>
                <div class="mb-3 ms-5">
                  <label class="form-label">Ainda não é registado? <a href="registar.php">Registar-se</a></label>
                </div>
                <button type="submit" name="btn-entrar" class="btn btn-primary btnlog">Entrar</button>
              </div>
            </form>
          </div>
          
    </main>
    <footer class="pt-2 " >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h5 class="textcolor">Informações</h5>
                    <nav class="nav flex-column ">
                        <div>
                            <a class="nav-link textcolor" href="sobrenos.html">Sobre nós</a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="faq.html">Fale conosco</a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="reembolso.html">Cancelamentos e reembolsos</a>
                        </div>
                        <div class="mt-2 mb-3">
                            <a class="ms-3" href="https://www.livroreclamacoes.pt/Inicio/"><img class="img-fluid livroimg" src="../img/principais/livro.png" alt="Livro de reclamações"></a>
                        </div>
                    </nav>   
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <h5 class="mx-md-5 textcolor">Métodos de pagamento</h5>
                    <img class="mt-4 img-fluid" src="../img/principais/metodos.png" alt="Métodos de pagamento: MBWay, Multibanco, Paypal, Maestro, MasterCard, Visa">
                </div>
            </div>
        </div>
        <div class="text-center pb-2 text-white">
            <p>© 2024 VetWorld. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
<!-- para as bandeiras do header-->
<script>
    document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function (event) {
        const selectedFlag = event.target.querySelector('img').src;
        const mainButton = document.getElementById('dropdownMenuButton').querySelector('img');
        mainButton.src = selectedFlag;
    });
    });
</script>
<!-- para o botão top -->
<script>
    window.addEventListener("scroll", function () {
        const button = document.getElementById("backToTop");
        if (window.scrollY > 200) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    });
    document.getElementById("backToTop").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
