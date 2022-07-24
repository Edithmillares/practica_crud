<?php
include("Conexion.php");

if(isset($_GET['idd'])) {
   $id_delete = $_GET['idd'];
   $query = "DELETE FROM estudiante WHERE Id = $id_delete";
   $resul = mysqli_query($con, $query);

   if(!$resul){
       die("Error al Eliminar");
   }

   $_SESSION['message'] = 'Resgistro Eliminado Exitosamente';
   $_SESSION['message_type']='danger';

   header("Location: index.php");
    
} 
?>