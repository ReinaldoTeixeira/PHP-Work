<?php 

header('Content-Type: application/json'); //avisando o php que o tipo de arquivo que vou trabalhar é json

$id = $_POST['codigo'];

require("../conexao/conexao.php");

$query = $con->query("SELECT distinct * FROM evento where id = '$id'");

$temp = $query->fetch(PDO::FETCH_ASSOC);

echo json_encode($temp);  //nessa situação estou pegando e com echo (todo arquivo que jogar no echo vai retornar na minha função) estou transformando em tipo json para encaminhar para minha função.

?>