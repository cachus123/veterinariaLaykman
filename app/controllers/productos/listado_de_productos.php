<?php

global $pdo;

$sql = "SELECT * FROM tb_productos ";
$query = $pdo->prepare($sql);
$query->execute();
$productos = $query->fetchAll(PDO::FETCH_ASSOC);

