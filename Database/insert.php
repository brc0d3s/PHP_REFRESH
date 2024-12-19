<?php 
require_once 'dbCon.php';

#$count = $pdo -> exec('INSERT INTO users(id,uname) VALUES(9878,"Tevin")');
#$lastID = $pdo -> lastInsertId();

#echo($count."rows were afffected. And last inserted id is ".$lastID);

/*
$pdo -> beginTransaction();
$pdo -> exec('INSERT INTO users(id,uname) VALUES(8,"Tony")');
$pdo -> exec('INSERT INTO users(id,uname) VALUES(98,"Kevin")');
$pdo -> exec('INSERT INTO users(id,uname) VALUES(78,"Trevin")');
$pdo -> exec('INSERT INTO users(id,uname) VALUES(978,"Tonievin")');
$pdo -> exec('INSERT INTO users(id,uname) VALUES(987,"Tevknin")');
$pdo -> commit();
*/


$name = "Tonicah";
$id =453;

$stm = $pdo -> prepare('INSERT INTO users(id,uname) VALUES(?,?)');
$stm -> bindValue(1,$id);
$stm -> bindValue(2,$name);
$stm -> execute();  
?>