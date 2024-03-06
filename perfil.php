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
}
if (!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Inicie sesión en la web");
            window.location = "login_register.php";
        </script>';
        session_destroy();
        die();
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
    <h1>Mi cuenta</h1>
    <h3>Nombre: </h3>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="index.php"></span>Inicio</a></li>
                <li><a href="#">Apartados</a>
                    <ul class="submenu1">
                        <li><a href="#">Recientes</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">HTML</a></li>
                    </ul>
                </li>
                <li><a href="SobreNacher.php">Sobre mi</a></li>
                <li><a href="">Contacto</a>
                    <ul class="submenu">
                        <li><a href="formulario.php">Formulario</a></li>
                    </ul>
                </li>
                <li><a href="Acerca_de.php">Acerca de</a></li>
                <li><a href="login_register.php">Iniciar sesión/Registrarse</a></li>
                <li><a href="">Mi cuenta</a>
                    <ul class="submenu2">
                        <li><a href="perfil.php">Mi perfil</a></li>
                        <li><a href="ajustes_cuenta.php">Ajustes</a></li>
                        <li><a href="apariencia.php">Apariencia</a></li>
                        <li><a href="white_black.php">Apariencia</a></li>
                        <li><a href="php/logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>

<?php

session_destroy();
echo '<script>
    window.location = "login_register.php;
</script>';
exit;

?>
