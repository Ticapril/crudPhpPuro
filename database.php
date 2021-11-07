<?php


$usuario = "root";
$senha = "";
$servidor = "localhost";
$banco = "gerenciamentocidades";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

$query = 'SELECT * FROM cidades';


//conecta no banco de executa a query passada SELECT * FROM cidades
$consulta = mysqli_query($conexao, $query);

