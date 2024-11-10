<?php
global $pdo, $fechaHora, $URL;
include ('../../../app/config.php');
session_start();

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña_verificacion = $_POST['contraseña_repetido'];

$cargo = "CLIENTE";

$contador = 0;
$sql = "SELECT * FROM usuarios WHERE correo = :email";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $contador++;
}

if ($contador > 0) {
    $_SESSION['mensaje'] = "Este correo " . $email . " ya está registrado";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/login/registro.php');
    exit();
} else {
    if ($contraseña && $contraseña_verificacion && $contraseña === $contraseña_verificacion) {
        $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre_completo, correo, contraseña, cargo, fyh_creacion) VALUES (?, ?, ?, ?, ?)";
        $sentencia = $pdo->prepare($sql);

        if ($sentencia->execute([$nombre_completo, $email, $contraseña_hashed, $cargo, $fechaHora])) {
            $_SESSION['mensaje'] = "Se registró correctamente";
            $_SESSION['icono'] = 'success';

            // Iniciar sesión automáticamente
            $_SESSION['sesion_email'] = $email;

            header('Location: ' . $URL . '/');
            exit();
        } else {
            $_SESSION['mensaje'] = "El usuario no se registró correctamente";
            $_SESSION['icono'] = 'error';
            header('Location: ' . $URL . '/admin/login/registro.php');
            exit();
        }
    } else {
        $_SESSION['mensaje'] = "Las contraseñas no son iguales o uno de los campos está vacío.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/login/registro.php');
        exit();
    }
}
