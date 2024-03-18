 <?php
    include('conexiondb.php');

    if(isset($_POST['btnAgregar'])){
        $nameUser = $_POST['nombre'];
        $lastname = $_POST['apellido'];
        $gender = $_POST['genero'];
        $celphone = $_POST['numeroCelular'];

        $consulta = mysqli_query($conexion, "INSERT INTO userTable(nameUser, lastname, gender, cellphone) VALUES ('$nameUser', '$lastname', '$gender', '$celphone')");

        if($consulta){
            echo 'Usuario insertado con éxito';
        } else {
            echo 'No se pudo registrar el usuario';
        }
    }
?>