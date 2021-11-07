<?php

include 'database.php';

$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cepInicial = $_POST['cep_inicial'];
$cepFinal = $_POST['cep_final'];

echo $cidade.' '.$estado.' '.$cepInicial.' '.$cepFinal;


$queryInsert = "INSERT INTO cidades(nome, estado, cep_inicial, cep_final)VALUES('$cidade','$estado',$cepInicial,$cepFinal)";


$consultaCadastro = mysqli_query($conexao,$queryInsert);
?>
</br>
<a href="listagem.php">Voltar</a>
</br>
<a href="cadastrar.php">Cadastrar cidade</a>