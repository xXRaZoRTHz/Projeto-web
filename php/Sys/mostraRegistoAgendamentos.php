<?php

include 'ligaBD.php';
$query = "SELECT * FROM tbl_factoagendamento ";

?>
<table class="table table-dark table-striped">
    <thead>
    <th>Nome do animal:</th>
    <th>Data:</th>
    <th>Hora</th>
    <th>Serviço:</th>
    </thead>
    <tbody>
        <?php
            $resultado = mysqli_query($liga,$query);
            if(mysqli_num_rows($resultado)>0){
                while($row = mysqli_fetch_assoc($resultado)){ ?>
                     <tr>
                        <td><?= $row['idanimal']; ?></td>
                        <td><?= $row['data']; ?></td>
                        <td><?= $row['hora']; ?></td>
                        <td><?= $row['idservico']; ?></td>
                </tr>
        <?php
                }
            }else{
                echo "<tr><td colspan=11>Não existem registos na base de dados</td></tr>";
            }
        ?>
    </tbody>
</table>