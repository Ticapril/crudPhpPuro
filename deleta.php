<?php

include 'database.php';

$id =  $_GET['id'];

$queryDelete = "DELETE FROM cidades WHERE ID = $id";
 
$consultaDelete = mysqli_query($conexao,$queryDelete);
?>
</br>
<a href="listagem.php">Voltar</a>
<a href="cadastrar.php">Cadastrar cidade</a>
