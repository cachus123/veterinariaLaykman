<?php
global $pdo, $fechaHora, $URL;
include ('../../../app/config.php');
$id_usuario = $_POST['id_usuario'];
$sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario");
$sentencia->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/admin/usuarios');
} else {
    session_start();
    $_SESSION['mensaje'] = "No se pudo eliminar";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/admin/usuarios');
}
