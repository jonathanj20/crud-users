<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Adminitración de usuarios</h1>
        <button>Añadir nuevo usuario</button>
    </main>

    <form id="addUser" method="post">
        <div>
            <label for="name">Nombre del usuario</label>
            <input type="text" placeholder="Ingresa el nombre" name="nombre" id="name" require>
        </div>
        <div>
            <label for="lastname">Ingresa el apellido del usuario</label>
            <input type="text" placeholder="Ingresa el apellido" name="apellido" id="lastname" require>
        </div>
        <div>
            <label for="gender">Selcciona el género del usuario</label>
            <select name="genero" id="gender">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
        </div>
        <div>
            <label for="celphone">Ingresa el número de teléfono</label>
            <input type="tel" name="numeroCelular" id="celphone" maxlength="10" require>
        </div>
        <button type="submit" id="btnAgregar" name="btnAgregar">Añadir usuario</button>
    </form>

    <?php 
        include("conexiondb.php");
        $tabla = mysqli_query($conexion, "SELECT * FROM userTable");

        include('eliminarUsuario.php');
        while ($fila = mysqli_fetch_array($tabla)) {
            echo "<form method='post'>
                    <table>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Género</td>
                            <td>Número de celular</td>
                            <td>Acciones</td>
                        </tr>
                        <tr>
                            <td>$fila[0]</td>
                            <td>$fila[1]</td>
                            <td>$fila[2]</td>
                            <td>$fila[3]</td>
                            <td>$fila[4]</td>
                        </tr>
                        <tr>
                            <input type='text' name='id' value='$fila[0]'>
                            <td><button name='btnEliminar'>Eliminar</button></td>
                            <td><button>Editar</button></td>
                        </tr>
                    </table>
                </form>";
        }   
    ?>
</body>
</html>