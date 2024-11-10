<?php
global $pdo, $URL;
session_start();
include ('../../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo = :email";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->execute();

$usuario = $query->fetch(PDO::FETCH_ASSOC);
$cargo_tabla = $usuario['cargo'];

if ($usuario && password_verify($password, $usuario['contraseña'])) {
    // Inicio de sesión exitoso
    $_SESSION['sesion_email'] = $email;
    echo "Bienvenido al sistema";

    if ($cargo_tabla == "ADMINISTRADOR"){
        header('Location: ' . $URL . '/admin');
    }else{
        header('Location: ' . $URL . '/');
    }

} else {
    // Fallo en el inicio de sesión
    echo "Error en los datos";
    header('Location: ' . $URL . '/');
    exit();
}
?>
