<?php
    include("conexiondb.php");
    if(isset($_POST['btnEliminar'])){
        $idUser = $_POST['id'];
        $resultado = mysqli_query($conexion, "DELETE FROM userTable WHERE id=$idUser");

        if($resultado){
            echo 'usuario eliminado correctamente';
        } else {
            echo 'hay que revisar';
        }
    }
?>