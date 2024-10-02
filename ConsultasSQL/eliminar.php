<?php
    // Añado un include del archivo donde hago la conexion a la base de datos
    include("./conexion.php");

    // Declaro una variable delete a la que le paso una consulta sql para eliminar
    // En este cason en la tabla users la fila con el id 12
    $delete = "DELETE FROM users WHERE id = 12";

    // Declaro una variable return a la que le paso una funcion que se llama mysqli_query
    // que tendra dos parametros la conexion a la base de datos y la consulta delete
    $return = mysqli_query($con,$delete);
    
    // Imprimo el return por pantalla para ver si todo se ha hecho correctamente.
    // Si sale 1 es correcto si sale 0 ha habido algun error.
    print_r($return);

    // Cierro la conexion a la base de datos
    mysqli_close($con);
?>