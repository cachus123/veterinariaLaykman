<?php

global $pdo, $id_usuario;

$sql = "SELECT * FROM usuarios where id_usuario = '$id_usuario'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $nombre_completo = $usuario['nombre_completo'];
    $correo = $usuario['correo'];
    $cargo = $usuario['cargo'];
}