<?php 
	$param = parse_ini_file('db.ini');
	try{
	$pdo = new PDO($param['url'], $param['user'], $param['pass']);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
 ?>
