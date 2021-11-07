<?php 

include 'database.php';

$id = $_POST['id'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cepInicial = $_POST['cep_inicial'];
$cepFinal = $_POST['cep_final'];

$queryEdit = "UPDATE cidades SET nome='$cidade', estado='$estado', cep_inicial=$cepInicial, cep_final=$cepFinal WHERE id=$id";
// print($queryEdit);
mysqli_query($conexao, $queryEdit);
 header('location:listagem.php');