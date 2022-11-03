<?php
    // //print_r($_POST);
    // if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtSigno"])){
    //     header('Location: index.php?mensaje=falta');
    //     exit();
    // }

    include_once 'model/conexion.php';
    $Nombre_Producto = $_POST["txtNombre"];
    $Referencia = $_POST["txtReferencia"];
    $Precio = $_POST["txtPrecio"];
    $Peso =$_POST["txtPeso"];
    $Categoria = $_POST["txtCategoría"];
    $Stock = $_POST["txtStock"];
    $Fecha_Creacion= $_POST["txtFecha"];
   
    
    $sentencia = $bd->prepare("INSERT INTO producto(Nombre_Producto,Referencia,Precio,Peso,Categoria,Stock,Fecha_Creacion) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$Nombre_Producto,$Referencia,$Precio,$Peso,$Categoria,$Stock,$Fecha_Creacion]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>