<?php
if ( (isset( $_SESSION['mensaje'])) && (isset( $_SESSION['icono']))) {
    $respuesta = $_SESSION ['mensaje'];
    $icono = $_SESSION ['icono']; ?>
    <script>
        Swal.fire({
            title: "<?php echo $respuesta; ?>",
            icon: "<?php echo $icono; ?>"
        });
    </script>
    <?php
    unset($_SESSION['mensaje']);
}
?>