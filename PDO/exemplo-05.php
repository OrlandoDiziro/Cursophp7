<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$login = "jose";
$password = "1234567890";

$stmt->execute(array($login, $password));

//$conn->rollback();

$conn->commit();

echo "Insert OK";



?>