<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRAVENTA - EDITAR</title>
</head>

<body>
    
    <!--Encabezado-->
    <h1>CompraVenta</h1>
     <!--Menu-->
        <hr />


    <!--Contenido del titulo-->
   

<?php
include 'conexion.php';
$idpersona = $_GET["idpersona"];
$sql = "select * from persona where idpersona= '" . $idpersona . "'";
$resultado = mysqli_query($con, $sql);
while ($fila = mysqli_fetch_assoc($resultado)) {
?>
    <div>
        <form method="get">
            <p>
                <input type="hidden" name="idpersona" value="<?php echo $fila['idpersona'] ?>">
            </p>
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>">
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" value="<?php echo $fila['apellido'] ?>">
            </p>
            <p>
                <label for="edad">Edad:</label>
                <input type="number" name="edad" value="<?php echo $fila['edad'] ?>">
            </p>
            <p>
                <label for="area">Area: </label>
                <input type="text" name="area" value="<?php echo $fila['area'] ?>">
            </p>
            <input type="submit" value="Agregar">
            <a href="contacto.php">Regresar</a>
        </form>
    <?php } ?>

    </div>


    <?php
    
    $idpersona=$_GET['idpersona'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $area = $_GET['area'];

    if ($nombre != null && $apellido != null) {
        $sql2 = "update persona set nombre = '" . $nombre . "',apellido = '" . $apellido . "',edad = '" . $edad . "',area = '" . $area . "' where idpersona = '".$idpersona."'" ;
        mysqli_query($con, $sql2);
        if ($nombres = 1) {
            header("location:contacto.php");
        }
    }
    ?>


</body>

</html>



