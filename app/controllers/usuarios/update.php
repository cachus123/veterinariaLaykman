<?php
global $pdo, $URL;
include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'] ?? null;
$nombre_completo = $_POST['nombre_completo'] ?? null;
$cargo = $_POST['cargo'] ?? null;
$fechaHora = date('Y-m-d H:i:s'); // Definir fechaHora

// Depuración: Imprime los datos para verificar su valor
var_dump($id_usuario, $nombre_completo, $cargo, $fechaHora);

try {
    $pdo->beginTransaction();

    $query = "UPDATE usuarios SET nombre_completo = :nombre_completo, cargo = :cargo, fyh_actualizacion = :fyh_actualizacion WHERE id_usuario = :id_usuario";
    $params = [':nombre_completo' => $nombre_completo, ':cargo' => $cargo, ':fyh_actualizacion' => $fechaHora, ':id_usuario' => $id_usuario];

    // Depuración: Imprime la consulta y los parámetros para verificar
    var_dump($query, $params);

    $sentencia = $pdo->prepare($query);
    if (!$sentencia->execute($params)) {
        throw new Exception(implode(", ", $sentencia->errorInfo()));
    }

    $pdo->commit();
    echo "Se actualizó correctamente";
    session_start();
    $_SESSION['mensaje'] = "Se actualizó correctamente";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/usuarios/');
    exit();
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Error en la actualización: " . $e->getMessage();
    session_start();
    $_SESSION['mensaje'] = "No se actualizó correctamente: " . $e->getMessage();
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
    exit();
}
?>

