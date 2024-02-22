<?php
session_start();
include 'php/conexion_bd.php';

if(isset($_SESSION['usuario'])) {

    $correo = $_SESSION['usuario'];

    $consulta_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($consulta_usuario) > 0) {
        $datos_usuario = mysqli_fetch_assoc($consulta_usuario);

        echo "Nombre: " . $datos_usuario['nombre_completo'] . "<br>";
        echo "Correo electrónico: " . $datos_usuario['correo'] . "<br>";

    } else {
        // No se encontraron datos del usuario
        echo "No se encontraron datos del usuario.";
    }
} else {
    // El usuario no ha iniciado sesión, redirigirlo al inicio de sesión
    session_destroy();
    echo '<script>
        window.location = "login_register.php;
    </script>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/style_perfil.css">
    <script src="js/perfil.js"></script>
</head>
<body>
    <h1>22+11</h1>
</body>
</html>
