<link rel="stylesheet" href="index.html">

<?php

include 'ligaBD.php';
$query = "SELECT * FROM tbl_cliente ";

?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<table class="table table-dark table-striped">
    <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>nif</th>
    <th>Email</th>
    <th>tel</th>
    <th>Password</th>
    <th>Opções</th>
    </thead>
    <tbody>
        <?php
            $resultado = mysqli_query($liga,$query);
            if(mysqli_num_rows($resultado)>0){
                while($row = mysqli_fetch_assoc($resultado)){ ?>
                     <tr>
                        <td><?= $row['idcliente']; ?></td>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['nif']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['telefone']; ?></td>
                        <td><?= $row['senha']; ?></td>
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