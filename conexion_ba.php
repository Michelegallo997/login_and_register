<?php
$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if ($conexion){
    echo "conectado exitosamente a la base de dato";
}else{
    echo"no se conecto a la base de datos";
}
?>