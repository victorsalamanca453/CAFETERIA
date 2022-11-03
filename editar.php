<?php include 'template/header.php' ?>

<?php
 // if(!isset($_GET['id'])){
 //     header('Location: index.php?mensaje=error');
 //        exit();
 //    }

     include_once 'model/conexion.php';
     $id=$_GET['id'];

    $sentencia = $bd->prepare("select * from  producto where id = ?;");
    $sentencia->execute([$id]);
    $producto = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($producto);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Producto:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre Producto: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $producto->Nombre_Producto; ?>">
                    </div>


                     <div class="mb-3">
                        <label class="form-label">Referencia: </label>
                        <input type="text" class="form-control" name="txtReferencia" required 
                        value="<?php echo $producto->Referencia; ?>">
                    </div>




                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="number" class="form-control" name="txtPrecio" autofocus required
                        value="<?php echo $producto->Precio; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Peso: </label>
                        <input type="number" class="form-control" name="txtPeso" autofocus required
                        value="<?php echo $producto->Peso; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtCategoria" autofocus required
                        value="<?php echo $producto->Categoria; ?>">
                    </div>
                     <div class="mb-3">
                        <label class="form-label">Stock: </label>
                        <input type="number" class="form-control" name="txtStock" autofocus required
                        value="<?php echo $producto->Stock; ?>">
                    </div>

                     <div class="mb-3">
                        <label class="form-label">Fecha Creacion: </label>
                        <input type="date" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $producto->Fecha_Creacion; ?>">
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>