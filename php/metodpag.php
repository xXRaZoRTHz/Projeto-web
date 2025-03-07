<?php 
        require 'Languages/init.php';
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
    <link rel="stylesheet" href="../css/carrinho.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="sticky-top">
        <?php
        if (isset($_SESSION['username'])) {
                                $username = htmlspecialchars($_SESSION['username']);
                            } else {
                                $username = $lang['login'];
                            }?>
            <section>
                <div class="d-flex justify-content-between align-items-center pt-3 container position-top">
                    <!-- Navbar -->
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-lg">
                            <div class="text-center navbar-brand me-5">
                                 <a href="index.php">
                                <img src="../img/principais/logo.png" class="img-fluid" style="max-height: 100px; min-height: 75px;" alt="<?php echo $lang['logop']; ?>">
                                </a>
                            <h1 class="text-white border-text">Vet<span class="titulo">World</span></h1>
                            </div>
                            <!-- Botão de menu hamburguer-->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu de navegação -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav gap-5">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php"><?php echo $lang['home']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="servicos.php"><?php echo $lang['servicos']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="agendar.php"><?php echo $lang['agende']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contactos.php"><?php echo $lang['contactos']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="faq.php"><?php echo $lang['faq']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="btn-group" role="group">
                                            <button type="button" id="dropdownMenuButton" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../img/principais/pt.png" alt="<?php echo $lang['ptp']; ?>" style="width: 30px; height: 20px;">
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item me-1" href="index.php?lang=en">
                                                <img src="../img/principais/us.png" alt="<?php echo $lang['usp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['in']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="index.php?lang=es">
                                                <img src="../img/principais/es.png" alt="<?php echo $lang['esp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['es']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="index.php?lang=pt">
                                                <img src="../img/principais/pt.png" alt="<?php echo $lang['ptp']; ?>" style="width: 30px; height: 20px;"> <?php echo $lang['pt']; ?>
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
                            <a href="carrinho.php">
                                <img src="../img/principais/shopping-cart.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['carp']; ?>">
                            </a>
                            <p class="mt-2 "><?php echo $lang['carrinho']; ?></p>
                        </div>
                        <div class="text-center">
                            <?php if (isset($_SESSION['username'])) {?>
                                <a href="perfiluser.php">
                                <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['logp']; ?>">
                            </a>
                            <?php } else { ?>
                                <a href="login.php">
                                <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['logp']; ?>">
                            </a>
                            <?php }; ?>
                            
                            <p class="mt-2"><?=$username; ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        
    <main>
        <section>
            <div class="position-relative m-4 w-75 mx-auto">
                <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                  <div class="progress-bar" style="width: 50%;"></div>
                </div>
                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
            </div>
            <div class="container" >
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="title mt-5 ms-md-5 ms-2">
                        <h1 class="w-100"><?php echo $lang['tmetodos']; ?></h1>
                        <span class="linhaTitle ms-md-3 ms-2"></span>
                    </div>
                    <div class="container mt-4">
                        <div class="accordion" id="paymentAccordion">
                            <div class="accordion-item mb-5">
                                <h2 class="accordion-header">
                                    <label class="accordion-button collapsed radio-label" data-bs-toggle="collapse" data-bs-target="#creditCard">
                                        <input type="radio" name="paymentOption" class="form-check-input me-2">
                                        <?php echo $lang['cartao']; ?>
                                        <img src="../img/principais/Visa_2021.svg" alt="Visa" class="payment-icon">
                                    </label>
                                </h2>
                                <div id="creditCard" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                                    <div class="accordion-body">
                                        <div class="container mt-4">
                                            <form>
                                                <div class="row">
                                                <div class="mb-3 col-12">
                                                    <label for="cardName" class="form-label"><?php echo $lang['cartaonome']; ?></label>
                                                    <input type="text" class="form-control" id="cardName" placeholder="<?php echo $lang['ctxcartao']; ?>">
                                                </div>                                
                                                <div class="col-md-8">
                                                    <label for="cardNumber" class="form-label"><?php echo $lang['cartaonumero']; ?></label>
                                                    <input type="text" class="form-control" id="cardNumber" placeholder="0000 0000 0000 0000">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="expiryDate" class="form-label"><?php echo $lang['validade']; ?></label>
                                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA">
                                                </div>
                                                <div class="mt-3 col-md-2 col-sm-3">
                                                    <label for="cvv" class="form-label">CVV</label>
                                                    <input type="text" class="form-control" id="cvv" placeholder="000">
                                                </div>
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input" type="checkbox" id="saveCard">
                                                    <label class="form-check-label" for="saveCard">
                                                        <?php echo $lang['cartaoguardar']; ?>
                                                    </label>
                                                </div>
                                            </div>
                                                <!-- Nota -->
                                                <p class="text-muted mt-3">
                                                    <?php echo $lang['cartaonota']; ?>
                                                </p>
                                                <button class="btn btn-primary botao" onclick="window.location.href='confirmcompra.php';"><?php echo $lang['btnprox']; ?></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            <div class="accordion-item mb-5">
                                <h2 class="accordion-header">
                                    <label class="accordion-button collapsed radio-label" data-bs-toggle="collapse" data-bs-target="#mbway">
                                        <input type="radio" name="paymentOption" class="form-check-input me-2">
                                        MB WAY
                                        <img src="../img/principais/MB_WAY.jpg" alt="MB Way" class="payment-icon">
                                    </label>
                                </h2>
                                <div id="mbway" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                                    <div class="accordion-body">
                                        <form action="">
                                            <p><?php echo $lang['mbnota']; ?></p>
                                            <div class="mb-3 col-6">
                                                <label for="mbtel" class="form-label"><?php echo $lang['tel']; ?></label>
                                                <input type="tel" class="form-control" id="mbtel">
                                            </div>
                                            <button class="btn btn-primary botao mt-2" onclick="window.location.href='confirmcompra.php';"><?php echo $lang['btnprox']; ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 text-center">
                    <div class="caixa mx-auto">
                        <div class="nItens">
                            <span>0 <?php echo $lang['artigo']; ?></span>
                        </div>
                        <span class="linha"></span>
                        <div class="total">
                            <span><?php echo $lang['total']; ?></span>
                            <span>0,00€</span>
                        </div>
                        <div class="taxas">
                            <span><?php echo $lang['imposto']; ?> </span>
                            <span> 0,00€</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        </section>
        <!-- Botão do TOP -->
        <button id="backToTop" class="btn btn-primary position-fixed" style="bottom: 20px; right: 20px;" >
            <i class="fa-solid fa-circle-arrow-up"></i>
        </button>
    </main>
    <footer class="pt-2 " >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h5 class="textcolor"><?php echo $lang['info']; ?></h5>
                    <nav class="nav flex-column ">
                        <div>
                            <a class="nav-link textcolor" href="sobrenos.php"><?php echo $lang['sobrenos']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="faq.php"><?php echo $lang['faq']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="reembolso.php"><?php echo $lang['cancelamento']; ?></a>
                        </div>
                        <div class="mt-2 mb-3">
                            <a class="ms-3" href="https://www.livroreclamacoes.pt/Inicio/"><img class="img-fluid livroimg" src="../img/principais/livro.png" alt="<?php echo $lang['livrop']; ?>"></a>
                        </div>
                    </nav>   
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <h5 class="mx-md-5 textcolor"><?php echo $lang['metodos']; ?></h5>
                    <img class="mt-4 img-fluid" src="../img/principais/metodos.png" alt="ç<?php echo $lang['metodosp']; ?>">
                </div>
            </div>
        </div>
        <div class="text-center pb-2 text-white">
            <p><?php echo $lang['direitos']; ?></p>
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
