<?php

global $pdo;

$sql = "SELECT *, usu.nombre_completo as nombre_completo, usu.correo as correo FROM tb_reservas as res INNER JOIN usuarios as usu ON usu.id_usuario = res.id_usuario";
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(PDO::FETCH_ASSOC);
