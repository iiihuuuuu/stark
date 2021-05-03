<?php

require_once '../model/database.class.php';

$db = new Database();
$conn = $db->getConnection();

if (!$conn) {
	echo "Não foi possível conectar ao banco MySQL"; 
	exit;
}
  else {
  	echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!";
}
