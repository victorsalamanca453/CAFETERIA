<?php include 'template/header.php' ?>

<?php
 // if(!isset($_GET['id'])){
 //    header('Location: index.php?mensaje=error');
 //        exit();
 //  }

     include_once 'model/conexion.php';
      //$id=$_GET['id'];

     $sentencia = $bd->prepare("select * from  producto where id = ?;");
    //$sentencia->execute([$id]);
    $producto = $sentencia->fetch(PDO::FETCH_OBJ);
    // //print_r($producto);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Generar Venta:
                </div>
                <form class="p-4" method="POST" action="registrarventa.php">
                    <div class="mb-3">
                        <label class="form-label">Id producto: </label>
                        <input type="number" class="form-control" name="txtid" autofocus required>
                    </div>
                   <!--  <div class="mb-3">
                        <label class="form-label"> Nombre Producto: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div> -->

                    <div class="mb-3">
                        <label class="form-label">Cantidad: </label>

                        <input type="number" class="form-control" name="txtCantidad" autofocus required>
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>