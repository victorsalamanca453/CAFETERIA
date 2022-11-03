<?php
    include_once 'model/conexion.php';
    $id =  $_POST["txtid"];
    $Cantidad = $_POST["txtCantidad"];   

    $sentencia2 = $bd->prepare("select Stock from producto where id = ?;");
    $sentencia2->execute([$id]);
    $Stock = $sentencia2->fetch(PDO::FETCH_OBJ);

    echo '<pre><br>-->QUERY-: ';
    var_dump($query);
    echo '</pre>';
    
    if($Stock->Stock == 0){
        header('Location: index.php?mensaje=sinStock');
        exit();
    }

    $calculo = $Stock->Stock - $Cantidad;

    $sentencia1 = $bd->prepare("INSERT INTO  ventas (id_producto,cantidad) VALUES (?,?);");
    $resultado1 = $sentencia1->execute([$id,$Cantidad]);

    $sentencia3= $bd->prepare("UPDATE producto SET Stock = ? WHERE  id=?");
    $resultado3 = $sentencia3->execute([$calculo,$id]);

    if ($resultado1 === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>
