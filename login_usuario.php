<?php
include 'conexion_ba.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Hash de la contraseña para comparar con la base de datos
$contrasena = hash('sha512', $contrasena);

// Mostrar el hash de la contraseña para depuración
echo "Hash de la contraseña al iniciar sesión: " . $contrasena . "<br>";

// Mostrar la consulta SQL para depuración
$sql_query = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
echo "Consulta SQL: " . $sql_query . "<br>";

$validar_login = mysqli_query($conexion, $sql_query);

if (mysqli_num_rows($validar_login) > 0) {
    header("Location: bienvenida.php");
    exit;
} else {
    echo '<script>
    alert("Correo o contraseña incorrectos");
    window.location.href = "index.php";
    </script>';
    exit;
}

mysqli_close($conexion);
?>
