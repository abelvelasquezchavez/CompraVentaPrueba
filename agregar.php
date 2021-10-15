<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRAVENTA - AGREGAR</title>
</head>

<body>
    <!--Encabezado-->
    <h1>CompraVenta</h1>
    <!--Menu-->
    <hr />
    <!--Contenido del titulo-->
    <h2>AGREGAR USUARIO AL CRUD</h2>
    <div>
        <form method="get">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido">
            </p>

            <p>
                <label for="edad">Edad:</label>
                <input type="number" name="edad">
            </p>
            <p>
                <label for="area">Area: </label>
                <input type="text" name="area">
            </p>
            <input type="submit" value="Agregar">
            <a href="contacto.php">Regresar</a>


        </form>
    </div>
    </hr>
    <?php
    include 'conexion.php';
    $nombres = $_GET["nombre"];
    $apellidos = $_GET['apellido'];
    $edades = $_GET['edad'];
    $areas = $_GET['area'];

    if ($nombres != null && $apellidos != null) {
        $sql = "insert into persona(nombre,apellido,edad,area)values('" . $nombres . "','" . $apellidos . "','" . $edades . "','" . $areas . "') ";
        mysqli_query($con, $sql);
        if ($nombres = 1) {
            header("location:contacto.php");
        }
    }
    ?>
</body>

</html>