<?php
$string = '<h1>Hello world</h1>';
const sanitize = FILTER_SANITIZE_STRING;

$filteredStr = filter_var($string, FILTER_SANITIZE_STRING);
print_r($filteredStr);
?>