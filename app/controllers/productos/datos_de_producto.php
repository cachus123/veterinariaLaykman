<?php

global $pdo, $id_producto;

$sql = "SELECT *,usu.nombre_completo as nombre_completo 
        FROM tb_productos as pro INNER JOIN usuarios as usu ON usu.id_usuario = pro.id_usuario
         where id_producto = '$id_producto'";
$query = $pdo->prepare($sql);
$query->execute();
$productos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos as $producto) {
    $codigo = $producto['codigo'];
    $nombre_producto = $producto['nombre_producto'];
    $descripcion = $producto['descripcion'];
    $stock = $producto['stock'];
    $stock_minimo = $producto['stock_minimo'];
    $stock_maximo = $producto['stock_maximo'];
    $precio_compra = $producto['precio_compra'];
    $precio_venta = $producto['precio_venta'];
    $fecha_de_ingreso = $producto['fecha_de_ingreso'];
    $imagen = $producto['imagen'];
    $id_usuario = $producto['id_usuario'];
    $nombre_completo = $producto['nombre_completo'];
}