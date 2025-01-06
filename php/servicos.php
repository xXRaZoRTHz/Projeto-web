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
    <link rel="stylesheet" href="../css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../javascript/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../javascript/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
                                        <li><a class="dropdown-item me-1" href="#?lang=en">
                                                <img src="../img/principais/us.png" alt="<?php echo $lang['usp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['in']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=es">
                                                <img src="../img/principais/es.png" alt="<?php echo $lang['esp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['es']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=fr">
                                                <img src="../img/principais/Flag_of_France.png" alt="<?php echo $lang['frp']; ?>" style="width: 30px; height: 20px;"> <?php echo $lang['fr']; ?>
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=pt">
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

    <main class="h-auto">
        <!-- CARTÕES -->
        <section>
            <div class="card-group mt-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <div class="card h-100">
                            <img src="../img/servicos/consulta.jpg" class="card-img-top" alt="<?php echo $lang['sAGp']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sAGt']; ?></h5>
                            <p class="card-text"><?php echo $lang['sAGdc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal1"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="../img/servicos/vacinacao.jpg" class="card-img-top imgcartao" alt="<?php echo $lang['sVap']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sVat']; ?></h5>
                            <p class="card-text"><?php echo $lang['sVadc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal2"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="../img/servicos/castracao.jpg" class="card-img-top" alt="<?php echo $lang['sCEp']; ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $lang['sCEt']; ?></h5>
                          <p class="card-text"><?php echo $lang['sCEdc']; ?></p>
                          <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal3"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="../img/servicos/exames.jpg" class="card-img-top" alt="<?php echo $lang['sELp']; ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $lang['sELt']; ?></h5>
                          <p class="card-text"><?php echo $lang['sELdc']; ?></p>
                          <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal4"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="../img/servicos/banho.jpg" class="card-img-top" alt="<?php echo $lang['sBap']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sBat']; ?></h5>
                            <p class="card-text"><?php echo $lang['sBadc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal5"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                          <img src="../img/servicos/tosa.jpg" class="card-img-top" alt="<?php echo $lang['sTop']; ?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sTot']; ?></h5>
                            <p class="card-text"><?php echo $lang['sTodc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal6"><?php echo $lang['sbtnsaber']; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- Conteúdo dentro dos cartões -->
            <div class="modal fade" id="modal1"  tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal1"><?php echo $lang['sAGt']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sAGd']; ?></p>
                            <p><strong><?php echo $lang['sindicado']; ?></strong><?php echo $lang['sAGi']; ?></p>
                            <p> <strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong><?php echo $lang['sAGb']; ?> </p>
                            <p><strong><?php echo $lang['spreco']; ?></strong> 50€.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal2"  tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal2"><?php echo $lang['sVat']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sVad']; ?></p>
                                <p><strong><?php echo $lang['sindicado']; ?></strong> <?php echo $lang['sVai']; ?>.</p>
                                <p><strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong> <?php echo $lang['sVab']; ?></p>
                                <p><strong><?php echo $lang['spreco']; ?></strong> 45€</p>
                                <p><strong><?php echo $lang['snota']; ?></strong> <?php echo $lang['snotad']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal3"  tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal3"><?php echo $lang['sCEt']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sCEd']; ?> </p>
                            <p><strong><?php echo $lang['sindicado']; ?></strong> <?php echo $lang['sCEi']; ?></p>
                            <p><strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong> <?php echo $lang['sCEb']; ?></p>
                            <p><strong><?php echo $lang['spreco']; ?></strong> 150€</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal4"  tabindex="-1" aria-labelledby="modal4" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal4"><?php echo $lang['sELt']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sELd']; ?></p>
                            <p><strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong> <?php echo $lang['sELb']; ?></p>
                            <p><strong><?php echo $lang['spreco']; ?></strong> 25€</p>
                            <p><strong><?php echo $lang['snota']; ?></strong> <?php echo $lang['snotad']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal5"  tabindex="-1" aria-labelledby="modal5" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal5"><?php echo $lang['sBat']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sBad']; ?></p>
                            <p><strong><?php echo $lang['spreco']; ?></strong> 25€</p>
                            <p><strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong> <?php echo $lang['sBab']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal6"  tabindex="-1" aria-labelledby="modal6" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal6"><?php echo $lang['sTot']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong><?php echo $lang['sdescricao']; ?></strong> <?php echo $lang['sTod']; ?></p>
                            <p><strong class="text-success"><?php echo $lang['sbeneficio']; ?></strong> <?php echo $lang['sTob']; ?></p>
                            <p><strong><?php echo $lang['spreco']; ?></strong> 25€</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang['sbtnvoltar']; ?></button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='agendar.php';"><?php echo $lang['sbtnagendar'];  ?></button>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Paginação -->
         <div class="container ">
        <nav aria-label="Page navigation example" >
            <ul class="pagination justify-content-center mt-5">
              <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="servicos2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="servicos3.php">3</a></li>
              <li class="page-item"><a class="page-link" href="servicos2.php">Próximo</a></li>
            </ul>
          </nav>
        </div>
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
<!-- info dos serviços -->
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})
</script>
