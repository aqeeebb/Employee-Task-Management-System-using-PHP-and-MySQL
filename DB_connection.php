<?php  

$sName = "newsever.mysql.database.azure.com";
$uName = "user";
$pass  = "Aqib1234";
$db_name = "task_db";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
	echo "Connection failed: ". $e->getMessage();
	exit;

}

