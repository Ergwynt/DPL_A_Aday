<?php
    // Añado un include del archivo donde hago la conexion a la base de datos
    include("./conexion.php");

    // Creo una variable insert a la que le paso un string con la linea sql correspondiente para insertar.
    $insert = "insert into users( nombre, email )
    values('Federico', 'Fede@gmail.com')";

    // Declaro una variable return a la que le paso una funcion que se llama mysqli_query
    // que tendra dos parametros la conexion a la base de datos y la consulta insert 
    $return = mysqli_query ($con,$insert);
    
    // Imprimo el return por pantalla para ver si todo se ha hecho correctamente.
    // Si sale 1 es correcto si sale 0 ha habido algun error.
    print_r($return);

    // Cierro la conexion de la base de datos.
    mysqli_close($con);


?>