<?php

    session_start();

    if (!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Inicie sesión en la web");
                window.location = "login_register.php";
            </script>';
            session_destroy();
            die();
    }
    session_destroy();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialScoop</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="php/logout.php">Cerrar sesión</a>
</body>
</html>
