<?php

try{
	$pdo = new PDO("mysql:dbname=teste1;host=localhost", "root", "");
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
	exit;
}

$sql = $pdo->query("SELECT * FROM notificacoes WHERE id_user = 1 AND read_status = 0");

$registros = array('qtd'=>0);

if($sql->rowCount() > 0){
	$registros['qtd'] = $sql->rowCount();
}

echo json_encode($registros);
exit;