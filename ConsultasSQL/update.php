<?php
    // Añado un include del archivo donde hago la conexion a la base de datos.
    include("./conexion.php");

    // Declaro una variable update a la que le paso una consulta sql para modificar una fila de la tabla
    // En este caso el nombre del id 11.
    $update = "update users set nombre = 'Fedelobo' where id = 11";

   // Declaro una variable return a la que le paso una funcion que se llama mysqli_query
    // que tendra dos parametros la conexion a la base de datos y la consulta update
    $return = mysqli_query ($con,$update);

    // Imprimo el return por pantalla para ver si todo se ha hecho correctamente.
    // Si sale 1 es correcto si sale 0 ha habido algun error.
    print_r($return);

    // Cierro la conexion a la base de datos.
    mysqli_close($con);

?>