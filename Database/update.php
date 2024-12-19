<?php
require_once 'dbCon.php';

$newName = "Java";
$newID = 10;

$stm = $pdo -> prepare('UPDATE  users SET id=?,uname=? WHERE id=8');
$stm -> bindValue(1,$newID);
$stm -> bindValue(2,$newName);
$stm -> execute();
?>