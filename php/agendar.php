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
    <link rel="stylesheet" href="../css/carrinho.css">
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
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="servicos.html">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Agende Agora</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactos">Contactos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">Fale conosco</a>
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
                    <a href="carrinho.html">
                        <img src="../img/principais/shopping-cart.png" class="img-fluid" style="max-width: 50px;" alt="Carrinho">
                    </a>
                    <p class="mt-2">Carrinho</p>
                </div>
                <div class="text-center">
                    <a href="login.html">
                        <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="Login">
                    </a>
                    <p class="mt-2">Login</p>
                </div>
            </div>
        </div>
    </section>
</header>
    <main class="h-auto"> 
        <section >
            <div class="row">
                <div class="col-12">
                    <div class="title mt-5 ms-md-5 ms-2">
                        <h1 class="me-4 w-100">Agende agora</h1>
                        <span class="linhaTitle2 me-4"></span>
                    </div>
                    
                    <form action="">
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12">
                                <label for="animal" class="form-label"><h3>Selecione o animal</h3></label>
                                <div class="d-flex align-items-center">
                                    <select class="form-select" aria-label="Seleção de Animal">
                                        <option selected>Escolher o animal</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <!-- ADICIONAR ANIMAL -->
                                    <button type="button" class="btn btn-primary botao ms-2" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#addAnimalModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar animal">
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-dog"></i>
                                    </button>

                                    <div class="modal fade" id="addAnimalModal" tabindex="-1" aria-labelledby="addAnimalModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addAnimalModalLabel">Adicionar Animal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="nomeani" class="form-label" require>Nome do Animal</label>
                                                            <input type="text" class="form-control" id="nomeani" placeholder="Insira o nome do animal">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="especie" class="form-label">Espécie</label>
                                                            <select class="form-select" id="especie">
                                                                <option selected>Escolha a espécie</option>
                                                                <option value="1">Cão</option>
                                                                <option value="2">Gato</option>
                                                                <option value="3">Ave</option>
                                                                <option value="4">Réptil</option>
                                                                <option value="5">Roedor</option>
                                                                <option value="6">Coelho</option>
                                                                <option value="7">Equino</option>
                                                                <option value="8">Bovino</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="dateani" class="form-label">Data de Nascimento</label>
                                                            <input type="date" class="form-control" id="dateani">
                                                        </div>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="animal" class="form-label"><h3>Selecione o serviço</h3></label>
                                <select class="form-select" aria-label="Seleção de Serviço">
                                    <option selected>Escolher o serviço</option>
                                    <option value="1">Consulta de Avaliação Geral</option>
                                    <option value="2">Banho</option>
                                    <option value="3">Tosa</option>
                                    <option value="4">Controle de Parasitas</option>
                                    <option value="5">Vacinação</option>
                                    <option value="6">Exames Laboratoriais</option>
                                    <option value="7">Castração (Esterilização)</option>
                                    <option value="8">Cirurgias Gerais</option>
                                    <option value="9">Check-ups Preventivos</option>
                                    <option value="10">Radiologia e Ultrassonografia</option>
                                    <option value="11">Atendimento de Emergência</option>
                                    <option value="12">Odontologia Veterinária</option>
                                    <option value="13">Serviços de Reprodução</option>
                                    <option value="14">Eutanásia e Cremação</option>
                                    <option value="15">Internação</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="date" class="form-label" aria-label="Selecione a data"><h3>Selecione a data</h3></label>
                                <div class="d-flex align-items-start">
                                    <input class="form-control w-25 me-2" type="date" name="date" id="date" min="2025-01-02" max="2025-12-31">
                                    <p class="text-success">Disponibilidade: <br> Dias úteis de segunda a sexta</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="time" class="form-label" aria-label="Selecione a hora"><h3>Selecione a hora</h3></label>
                                <div class="d-flex align-items-start">
                                    <input class="form-control w-25 me-2" type="time" name="time" id="time" min="09:00" max="22:00">
                                    <p class="text-success">Horários disponíveis:<br> Das 8:00 às 12:00 <br> Das 14:00 às 22:00</p>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary botao mt-5 mb-5 d-block mx-auto" value="Adicionar ao carrinho">
                    </form>
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
<!-- TOOLTIP -->
 <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
 </script>
