<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=invoicedb";
$pdo = new PDO($dsn, 'root', '');

function selecAll($table){
global $pdo;
$sql ="select * from $table";
return $pdo->query($sql)->fetchAll();
}







?>