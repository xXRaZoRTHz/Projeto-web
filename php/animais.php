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
                                <a class="nav-link" href="#">Agende Agora</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
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
        <section>
            <div class="row">                  
                    <div class="col-md-3">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <h2 class="navbar-toggler" style="border: 1px solid white;">
                            <?php echo $lang['animais']; ?>
                            </h2>
                            <div class="collapse navbar-collapse" id="navbarMenu">
                                <div class="list-group text-center w-100 menu ">
                                    <a href="perfiluser.php" class="list-group-item list-group-item-action">
                                    <?php echo $lang['dadosperfil']; ?>
                                    </a>
                                    <a href="agendamentos.php" class="list-group-item list-group-item-action" aria-current="true"><?php echo $lang['agendamentos']; ?></a>
                                    <a href="animais.php" class="list-group-item list-group-item-action active"><?php echo $lang['animais']; ?></a>
                                    <a href="histcompras.php" class="list-group-item list-group-item-action"><?php echo $lang['histcompras']; ?></a>
                                    <a href="index.php" class="list-group-item list-group-item-action text-danger"><?php echo $lang['sair']; ?></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                <div class="col-md-9">
                    <?php

                        include 'Sys/ligaBD.php';
                        $query = "
                            SELECT 
                                tbl_animalcliente.idanimal,
                                tbl_animalcliente.nome,
                                tbl_animalcliente.datanasc,
                                tbl_dimtipo.tipo AS especie_nome
                            FROM 
                                tbl_animalcliente
                            JOIN 
                                tbl_dimtipo
                            ON 
                                tbl_animalcliente.idtipo = tbl_dimtipo.idtipo
                        ";
                        $resultado=mysqli_query($liga,$query);
                        ?>
                        <table class="table text-center">
                            <thead>
                            <th><?php echo $lang['nomeani']; ?></th>
                            <th><?php echo $lang['especie']; ?></th>
                            <th><?php echo $lang['datanasc']; ?></th>
                            <th><?php echo $lang['opcoes']; ?></th>
                            </thead>
                            <tbody>
                                <?php
                                    $resultado = mysqli_query($liga,$query);
                                    if(mysqli_num_rows($resultado)>0){
                                        while($row = mysqli_fetch_assoc($resultado)){ ?>
                                            <tr class="align-center">
                                                <td><?= $row['nome']; ?></td>
                                                <td><?= $row['especie_nome']; ?></td>
                                                <td><?= $row['datanasc']; ?></td>
                                                <td class="">
                                                    <a href="editaAnimal.php?id=<?=$row['idanimal']; ?> " class="btn btn-primary botao"><i class="fa-solid fa-pencil"></i></a>&nbsp;&nbsp;
                                                    <a href="Sys/eliminarAnimal.php?id=<?=$row['idanimal']; ?> " class="btn btn-primary botao"><i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }else{
                                        echo "<tr><td colspan=11><?php echo $lang['semanimal']; ?></td></tr>";
                                    }
                                    mysqli_close($liga);
                                ?>
                            </tbody>
                        </table>
                        <div class="col-3">
                        <button type="button" class="btn btn-primary botao ms-2" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#addAnimalModal" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $lang['btnaddani']; ?>">
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-dog"></i>
                        </button>

                        <div class="modal fade" id="addAnimalModal" tabindex="-1" aria-labelledby="addAnimalModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addAnimalModalLabel"><?php echo $lang['btnaddani']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_registo" method="POST" action="Sys/validacaoAnimal.php">
                                            <div class="mb-3">
                                                <label for="nomeani" class="form-label"><?php echo $lang['nomeani']; ?></label>
                                                <input type="text" class="form-control" name="ctx_nomeani" id="nomeani" placeholder="<?php echo $lang['ctxnomeani']; ?>" required maxlength="20">
                                            </div>
                                            <div class="mb-3">
                                                <label for="especie" class="form-label"><?php echo $lang['especie']; ?></label>
                                                <select class="form-select" id="especie" name="ctx_especie" required>
                                                    <option selected><?php echo $lang['escolha']; ?></option>
                                                    <option value="1"><?php echo $lang['cao']; ?></option>
                                                    <option value="2"><?php echo $lang['gato']; ?></option>
                                                    <option value="3"><?php echo $lang['ave']; ?></option>
                                                    <option value="4"><?php echo $lang['reptil']; ?></option>
                                                    <option value="5"><?php echo $lang['roedor']; ?></option>
                                                    <option value="6"><?php echo $lang['coelho']; ?></option>
                                                    <option value="7"><?php echo $lang['equino']; ?></option>
                                                    <option value="8"><?php echo $lang['bovino']; ?></option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="dateani" class="form-label"><?php echo $lang['datanasc']; ?></label>
                                                <input type="date" class="form-control" id="dataani" name="ctx_dataani" required>
                                            </div>
                                        <input type="submit" class="btn btn-primary botao" value="<?php echo $lang['salvar']; ?>">
                                        </form>
                                    </div>
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
