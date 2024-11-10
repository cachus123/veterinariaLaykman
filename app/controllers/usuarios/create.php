<?php
global $pdo, $fechaHora, $URL;
include ('../../../app/config.php');

$nombre_completo = $_POST['nombre_completo'] ?? null;
$email = $_POST['correo'] ?? null;
$contraseña = $_POST['contraseña'] ?? null;
$contraseña_verificacion = $_POST['contraseña_verificacion'] ?? null;
$cargo = $_POST['cargo'] ?? null;

$contador = 0;
$sql = "SELECT * FROM usuarios where correo = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}
if ($contador>0) {
    //echo "El usuario ya se encuentra registrado";
    session_start();
    $_SESSION['mensaje'] = "Este correo ".$email." ya esta registrado";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/usuarios/create.php');
}else{
   // echo "Este usuario es nuevo";
    if ($contraseña && $contraseña_verificacion && $contraseña === $contraseña_verificacion) {
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre_completo, correo, contraseña, cargo, fyh_creacion) VALUES (?, ?, ?, ?, ?)";
        $sentencia = $pdo->prepare($sql);

        if ($sentencia->execute([$nombre_completo, $email, $contraseña, $cargo, $fechaHora])) {
            session_start();
            $_SESSION['mensaje'] = "Se registro correctamente";
            $_SESSION['icono'] = 'success';
            header('Location: ' . $URL . '/admin/usuarios');
            exit; // Asegúrate de detener la ejecución después de redireccionar
        } else {
            session_start();
            $_SESSION['mensaje'] = "El usuario no se registró correctamente";
            $_SESSION['icono'] = 'error';
            header('Location: ' . $URL . '/admin/usuarios/create.php');
        }
    } else {
       // echo "Las contraseñas no son iguales o uno de los campos está vacío.";
        session_start();
        $_SESSION['mensaje'] = "La contraseña no son iguales";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/usuarios/create.php');
    }
}
