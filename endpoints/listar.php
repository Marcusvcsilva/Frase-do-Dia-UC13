<?php

// Verificar se aleatorio=1 ou listar todas:
header('Content-Type: application/json; charset=utf-8');
require_once('../classes/Frase.class.php');
$f = new Frase();

$resultado = $f -> ListarTodas();

// Transformar a array em um Json:
$json = json_encode($resultado);

echo $json;

?>