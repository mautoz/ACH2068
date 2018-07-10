
<?php

require 'vendor/autoload.php';
//Cria a conexão Mongo PHP
$client = new MongoDB\Client;
//Cria o Banco de Dados
$ergolist = $client->ergolist;
//Cria a colação
$result1 = $ergolist->createCollection('avaliadores');

$avaliadores = $ergolist->avaliadores;
//Insere os dados de teste. São os mesmos do avaliadores.js
$insertManyResult = $avaliadores->insertMany([
	['nome' => 'Marcelo Morandini', 'nivel' => 'Pos_Doutorado'],
	['nome' => 'Mauricio Tavares', 'nivel' => 'Estudante'],
	['nome' => 'Walter Cybis', 'nivel' => 'Pos_Doutorado'],
	['nome' => 'Thiago Coleti', 'nivel' => 'Doutorado']
]);

printf("Avaliadores inseridos: %d", $insertManyResults->getInsertedCount());

var_dump($insertManyResult->getInsertedIds());

?>
