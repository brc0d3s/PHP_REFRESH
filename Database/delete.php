<?php 
require_once 'dbCon.php';

#delete Tonicah
$uname = "Tonicah";
$stm = $pdo -> prepare('DELETE FROM users WHERE uname=?');
$stm -> bindValue(1,$uname);
$stm -> execute();
?>