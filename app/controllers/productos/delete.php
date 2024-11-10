<?php
global $pdo, $fechaHora, $URL;
include ('../../../app/config.php');

$id_producto = $_POST['id_producto'];

$sentencia = $pdo->prepare("DELETE FROM tb_productos WHERE id_producto = :id_producto");

$sentencia->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/admin/productos');
} else {
    session_start();
    $_SESSION['mensaje'] = "No se pudo eliminar";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/admin/productos');
}
