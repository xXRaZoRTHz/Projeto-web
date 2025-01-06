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
    <link rel="stylesheet" href="../css/media.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="sticky-top">
    <section>
        <div class="d-flex justify-content-between align-items-center pt-3 container position-top">
            <!-- Navbar -->
            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg">
                    <div class="text-center navbar-brand me-5">
                         <a href="index.php">
                        <img src="../img/principais/logo.png" class="img-fluid" style="max-height: 100px; min-height: 75px;" alt="<?php echo $lang['logop']; ?>">
                        </a>
                    <h1 class="text-white border-text">Vet<span>World</span></h1>
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
                                <a class="nav-link" href="servicos.html"><?php echo $lang['servicos']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="agendar.html"><?php echo $lang['agende']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactos"><?php echo $lang['contactos']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html"><?php echo $lang['faq']; ?></a>
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
                    <a href="carrinho.html">
                        <img src="../img/principais/shopping-cart.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['carp']; ?>">
                    </a>
                    <p class="mt-2"><?php echo $lang['carrinho']; ?></p>
                </div>
                <div class="text-center">
                    <a href="login.php">
                        <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['logp']; ?>">
                    </a>
                    <p class="mt-2"><?php echo $lang['login']; ?></p>
                </div>
            </div>
        </div>
    </section>
</header>
    <main>
        <!-- banner falta setar um texto pra cada item--> 
        <section >
            <div id="carouselExampleFade" class="carousel slide carousel-fade img-fluid" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/banner/banner2.jpeg" class="img-fluid d-block w-100" style="max-height: 600px; min-height: 263px; object-fit: cover;" alt="<?php echo $lang['bannerp1']; ?>">
                        <div class="container h-100">
                            <div class=" bannerbox1">
                                <h2><?php echo $lang['bannerTitle1']; ?></h2>
                                <p><?php echo $lang['bannerText1']; ?></p>
                                <button class="btn btn-primary"><?php echo $lang['bannerButton1']; ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner/banner3.jpg" class="img-fluid d-block w-100" style="max-height: 600px; min-height: 243px;  overflow: hidden;" alt="<?php echo $lang['bannerp2']; ?>">
                        <div class="container h-100">
                            <div class=" bannerbox2">
                                <h2><?php echo $lang['bannerTitle2']; ?></h2>
                                <p><?php echo $lang['bannerText2']; ?></p>
                                <button class="btn btn-primary"><?php echo $lang['bannerButton2']; ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner/vetbanner.jpg" class="img-fluid d-block w-100" style="max-height: 600px; min-height: 263px; ; overflow: hidden;" alt="<?php echo $lang['bannerp3']; ?>">
                        <div class="container h-100">
                            <div class=" bannerbox3">
                                <h2><?php echo $lang['bannerTitle3']; ?></h2>
                                <p><?php echo $lang['bannerText3']; ?></p>
                                <button class="btn btn-primary"><?php echo $lang['bannerButton3']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--serviços  -->
        <!-- Aqui falta colocar as imagens dos serviços e estiliza-las -->
        <section >
            <div class="seccao container">
                <h2><?php echo $lang['servicos']; ?></h2>
            </div>
            <div class="card-group mt-5 w-75 mx-auto">
                <div class="row row-cols-1 row-cols-md-3 g-4 ">
                    <div class="col">
                      <div class="card h-100">
                        <img src="../img/consultas.jpg" class="card-img-top" alt="<?php echo $lang['sAGp']; ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $lang['sAGt']; ?></h5>
                          <p class="card-text"><?php echo $lang['sAGdc']; ?></p>
                          <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal1"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="../img/higiene.jpg" class="card-img-top" alt="<?php echo $lang['sBap']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sBat']; ?></h5>
                            <p class="card-text"><?php echo $lang['sBadc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal5"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="../img/vacinacao.jpg" class="card-img-top" alt="<?php echo $lang['sVap']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['sVat']; ?></h5>
                            <p class="card-text"><?php echo $lang['sVadc']; ?></p>
                            <a href="#" class="btn btn-primary stretched-link" data-bs-toggle="modal" data-bs-target="#modal2"><?php echo $lang['sbtnsaber']; ?></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <button type="button" class="btn btn-primary"><?php echo $lang['sbtnagendar']; ?></button>
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
                                <button type="button" class="btn btn-primary"><?php echo $lang['sbtnagendar']; ?></button>
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
                                <button type="button" class="btn btn-primary"><?php echo $lang['sbtnagendar']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 text-md-end text-sm-center mt-5 px-5 ">
                    <button class=" btn btn-primary botao ml-5 "onclick="window.location.href='servicos.html';"><?php echo $lang['sbtnver']; ?></button>
                </div>
            </div>
        </section>
        <!-- newsletter -->
        <section>
            <div class="seccao container">
                <h2><?php echo $lang['newsl']; ?></h2>
            </div>
            <div>
                <nav class="navbar newsl">
                    <div class="container-fluid">
                        <img src="" alt="">
                        <p class=""><?php echo $lang['newsld']; ?></p>
                        <form class="d-flex" >
                        <input type="email" name="" id="" placeholder="<?php echo $lang['newsp']; ?>" class="email form-control mx-1" aria-label="Email">
                        <input class="botao btn btn-primary" type="submit" value="<?php echo $lang['newsbtn']; ?>" >
                      </form>
                    </div>
                  </nav>
            </div>
        </section>
        <!-- Por que nos escolher hein??????¿ -->
        <section >
            <div class="seccao container">
                <h2>Por que nos escolher</h2>
            </div>
                <div class="container-fluid">
                    <img src="../img/banner/banner.jpg" class="img-fluid d-block mx-auto usimg" style="max-height: 600px; overflow: hidden; object-fit: cover;" alt=".">
                    <div class="container h-100">
                        <div class="position-absolute rounded usbox">
                            <h2>Sobre nois ai, há de ter nossas redes sociais</h2>
                            <p>LOREM IPSUM</p>
                            <nav  class="nav justify-content-center">
                                <a class="nav-link" href=""><img src="../img/principais/instagram.png" alt="Nosso Instagram"></a>
                                <a class="nav-link" href=""><img src="../img/principais/facebook.png" alt="Nosso Facebook"></a>
                                <a class="nav-link" href=""><img src="../img/principais/twitter 1.png" alt="Nosso Twitter"></a>
                                <a class="nav-link" href=""><img src="../img/principais/youtube 1.png" alt="Nosso YouTube"></a></nav>
                            <button class="btn btn-primary botao">é nois!</button>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Contactos -->
        <section id="contactos">
            <div class="seccao container">
                <h2><?php echo $lang['contactos']; ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-5">
                    <div class="servbox mx-auto img-fluid">
                        <h5><?php echo $lang['tel']; ?> 987 675 456</h5>
                        <h5><?php echo $lang['email']; ?> geral.vetworld@gmail.com</h5>
                        <h5><?php echo $lang['endereco']; ?> Rua das Rosas, Nº 125, Loja 2 1200-345 Lisboa, Portugal</h5>
                    </div>
                </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="img-fluid">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3113.327785456777!2d-9.153204785460298!3d38.71028275097347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRua%20das%20Rosas%2C%20N%C2%BA%20125%2C%20Loja%202%201200-345%20Lisboa%2C%20Portugal!5e0!3m2!1spt-PT!2spt!4v1735214179828!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <a class="nav-link textcolor" href="sobrenos.html"><?php echo $lang['sobrenos']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="faq.html"><?php echo $lang['faq']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="reembolso.html"><?php echo $lang['cancelamento']; ?></a>
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
