<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>COMPRAVENTA - CRUD</title>
</head>

<body>

    <!--Encabezado-->
    <h1>CRUD</h1>
    <!--Menu-->
    <ul>
        <li> <a href="index.php">INICIO</a></li>
        <li> <a href="contenidos.php">CONTENIDOS</a></li>
        <li> <a href="contacto.php">CRUD</a></li>
    </ul>



    <hr>

    <?php

    include 'conexion.php';
    $sql = "select * from persona ORDER BY EDAD";
    $resultado = mysqli_query($con, $sql);

    ?>

    <div>
        <table border="1">
            <Thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EDAD</th>
                    <th>AREA</th>
                    <th>ACCION</th>
                </tr>
            </Thead>
            <TBody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)) { ?>

                    <TR>
                        <TD><?php echo $filas['idpersona'];  ?></TD>
                        <TD><?php echo $filas['nombre'];  ?></TD>
                        <TD><?php echo $filas['apellido'];  ?></TD>
                        <TD><?php echo $filas['edad'];  ?></TD>
                        <TD><?php echo $filas['area'];  ?></TD>
                        <td>
                            <a href="editar.php?idpersona=<?php echo $filas['idpersona']?>&nombre=&apellido=&edad=&area=">Editar</a>
                            <a href="eliminar.php?idpersona=<?php echo $filas['idpersona']?>">Eliminar</a>
                        </td>

                    </TR>
                <?php } ?>
            </TBody>
        </table>
        <a href="agregar.php?nombre=&apellido=&edad=&area=">Nuevo</a>
    </div>


</body>

</html>