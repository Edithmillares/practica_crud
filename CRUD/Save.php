<?php 

include("Conexion.php");

if(isset($_POST['btncrear'])){

    $ru=$_POST['ru'];
    $nom=$_POST['nombre'];
    $apell=$_POST['apellido'];
    $Carr=$_POST['Carrera'];


    $query = "INSERT INTO estudiante(RU,Nombre,Apellido,Carrera) 
                            VALUES ('$ru',
                                    '$nom',
                                    '$apell',
                                    '$Carr'
                                    )";
    $result = mysqli_query($con, $query);

    if(!$result){
        die("Error al Guardar");
    }
    
    $_SESSION['message']='Registro Creado Exitosamente';
    $_SESSION['message_type']='success';

    header("Location: index.php");
    }
