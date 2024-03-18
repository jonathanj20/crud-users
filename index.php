<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tabla.css">
    <script src="https://kit.fontawesome.com/675de417d6.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <h1 class="main__titulo">Adminitración de usuarios</h1>
        <button class="main__btnAgregar" id="btnAgregarUsuario">Añadir nuevo usuario</button>
    </main>

    <div class="containerAddUser" id="addUser">
        <div class="containerAddUser__header">
            <h2 class="containerAddUser__titulo">Agregar usuario</h2>
            <button id="btnCerrarAddUser" class="btnCerrar">
                <i class="fa-solid fa-xmark btnCerrarForm" id="btnCerrarAddUser"></i>
            </button>
        </div>
        <form class="formAddUser" method="post">
            <div class="form-addField">
                <label for="name" class="label-form">Nombre del usuario</label>
                <input type="text" placeholder="Ingresa el nombre" name="nombre" id="name" class="input-form" require>
            </div>
            <div class="form-addField">
                <label for="lastname" class="label-form">Ingresa el apellido del usuario</label>
                <input type="text" placeholder="Ingresa el apellido" name="apellido" id="lastname" class="input-form" require>
            </div>
            <div class="form-addField">
                <label for="gender" class="label-form">Selcciona el género del usuario</label>
                <select name="genero" id="gender" class="select-form">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
            <div class="form-addField"> 
                <label for="celphone" class="label-form">Ingresa el número de teléfono</label>
                <input type="tel" placeholder="Ingresa el número de celular" name="numeroCelular" id="celphone" maxlength="10" class="input-form" require>
            </div>
            <button type="submit" id="btnAgregar" name="btnAgregar" class="btnForm">Añadir usuario</button>
        </form>
    </div>

    <?php 
        /*incluyo estos archivos php para que se puedan realizar las consultas SQL,
        que es donde está la conexión y el proceso de las consultas*/
        include("insertarUsuario.php");
        include("conexiondb.php");

        $tabla = mysqli_query($conexion, "SELECT * FROM userTable");

        while ($fila = mysqli_fetch_array($tabla)) {
            echo "<form method='post' action='eliminarUsuario.php'>
                    <table class='tabla'>
                        <tr class='tabla__fila'>
                            <td class='tabla__col'>ID</td>
                            <td class='tabla__col' class='tabla__col'>Nombre</td>
                            <td class='tabla__col'>Apellido</td>
                            <td class='tabla__col'>Género</td>
                            <td class='tabla__col'>Número de celular</td>
                            <td class='tabla__col'>Acciones</td>
                        </tr>
                        <tr class='tabla__fila'>
                            <input type='text' class='inputInvisible' name='id' value='$fila[0]'>
                            <td class='tabla__col'>$fila[0]</td>
                            <td class='tabla__col'>$fila[1]</td>
                            <td class='tabla__col'>$fila[2]</td>
                            <td class='tabla__col'>$fila[3]</td>
                            <td class='tabla__col'>$fila[4]</td>
                            <td class='tabla__col-button'>
                                <button name='btnEliminar'>Eliminar</button>
                                <button>Editar</button>
                            </td>
                        </tr>
                    </table>
                </form>";
        }   
    ?>
    <script src="js/mostrarModal.js"></script>
</body>
</html>