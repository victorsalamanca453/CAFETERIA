<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id'];
    $Nombre_Producto = $_POST['txtNombre'];
    $Referencia = $_POST['txtReferencia'];
    $Precio = $_POST['txtPrecio'];
    $Peso = $_POST['txtPeso'];
    $Categoria = $_POST['txtCategoria'];
    $Stock = $_POST['txtStock'];
    $Fecha_Creacion= $_POST['txtFecha'];

    $sentencia = $bd->prepare("UPDATE producto SET Nombre_Producto = ?, Referencia = ?,Precio = ?, Peso = ? ,Categoria = ? ,Stock = ?,Fecha_Creacion = ?  where id = ?;");
    $resultado = $sentencia->execute([$Nombre_Producto, $Referencia,$Precio,$Peso,$Categoria,$Stock,$Fecha_Creacion,$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>