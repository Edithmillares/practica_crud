<?php
include("Conexion.php");

if(isset($_GET['ide'])) {
    $id_edit = $_GET['ide'];
    $query = "SELECT * FROM estudiante WHERE Id = $id_edit";
    $resul = mysqli_query($con, $query);
 
    if(mysqli_num_rows($resul) == 1){
       $obtener = mysqli_fetch_array($resul);
       $ru = $obtener['RU'];
       $nome = $obtener['Nombre'];
       $apelle = $obtener['Apellido'];
       $carr = $obtener['Carrera'];
    }   
 }
 if(isset($_POST['btnedit'])){
    $id_edit_e = $_GET['idE'];
    $ru_e = $_POST['eRu'];
    $nom_e = $_POST['eNomb'];
    $apell_e = $_POST['eApell'];
    $carr_e = $_POST['eCarr'];

    $query = "UPDATE estudiante set RU = '$ru_e', Nombre = '$nom_e', Apellido = '$apell_e', Carrera  = '$carr_e' WHERE Id = $id_edit_e";
    mysqli_query($con, $query);

    $_SESSION['message']='Cambios Guardados Exitosamente';
    $_SESSION['message_type']='warning';

    header("Location: index.php");
}
?>
<?php include("includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="Edit.php?idE=<?php echo $_GET['ide']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="eRu" value="<?php echo $ru; ?>" class="form-control" placeholder="Edite RU">
                    </div>
                  </br>
                    <div class="form-group">
                        <input type="text" name="eNomb" value="<?php echo $nome; ?>" class="form-control" placeholder="Edite Nombre">
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="text" name="eApell" value="<?php echo $apelle; ?>" class="form-control" placeholder="Edite Apellido">
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="text" name="eCarr" value="<?php echo $carr; ?>" class="form-control" placeholder="Edite Carrera">
                    </div>

                    <button class="btn btn-success" name="btnedit">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>