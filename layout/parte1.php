<?php
global$URL, $pdo;
session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
    //echo "Ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM usuarios where correo = '$email_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_usuario'];
        $cargo_sesion = $usuario['cargo'];
        $nombre_completo_sesion= $usuario['nombre_completo'];
    }


}else{
    //echo "No ha pasado por el login";
   // header('location: ' .$URL.'/login');
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria Laykman</title>
    <link href="<?php echo $URL;?>/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ICONOS DE BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--JQUERY-->
    <script src="<?php echo $URL;?>/public/js/jquery-3.7.1.js"></script>

    <!--STYLES CSS-->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/css/style.css">

    <!-- Libreria de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $URL;?>" style="color: #6f2479;">
            <img src="../public/images/Logo.jpg"
                 alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
            Laykman
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info" aria-current="page" href="#"> <i class="bi bi-house-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info">Disabled</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <?php
                if ($email_sesion == ""){
                   // echo "sin iniciar sesion";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ingresar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/login">Iniciar sesion</a></li>
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/login/registro.php">Registrarme</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }else{
                    //echo "ya se inicio sesion";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <?php echo $email_sesion ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</nav>