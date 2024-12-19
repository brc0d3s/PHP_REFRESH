<?php 
require_once 'dbCon.php';

$stm = $pdo -> query('SELECT * FROM users');
$rows = $stm -> fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    echo($row['id'].'=>'.$row['uname'].PHP_EOL);
}

?>