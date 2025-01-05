<link rel="stylesheet" href="index.html">

<?php

include 'ligaBD.php';
$query = "
    SELECT 
        tbl_animalcliente.idanimal,
        tbl_animalcliente.nome,
        tbl_animalcliente.datanasc,
        tbl_especie.nome AS especie_nome
    FROM 
        tbl_animalcliente
    JOIN 
        tbl_especie
    ON 
        tbl_animalcliente.idtipo = tbl_especie.idespecie
";
$resultado=mysqli_query($liga,$query);
mysqli_close($liga);
?>
<table class="table table-dark table-striped">
    <thead>
    <th>Nome do animal:</th>
    <th>Espécie</th>
    <th>Data de Nascimento:</th>
    <th>Opções</th>
    </thead>
    <tbody>
        <?php
            $resultado = mysqli_query($liga,$query);
            if(mysqli_num_rows($resultado)>0){
                while($row = mysqli_fetch_assoc($resultado)){ ?>
                     <tr>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['especie_nome']; ?></td>
                        <td><?= $row['data']; ?></td>
                        <td>
                            <a href="editaUser.php?id=<?=$row['idcliente']; ?> ">editar</a>&nbsp;&nbsp;
                            <a href="eliminarUser.php?id=<?=$row['idcliente']; ?> ">eliminar></a>
                        </td>
                </tr>
        <?php
                }
            }else{
                echo "<tr><td colspan=11>Não existem registos na base de dados</td></tr>";
            }
        ?>
    </tbody>
</table>