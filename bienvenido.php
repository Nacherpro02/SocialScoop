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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bienvenido</h1>
<script>
    var delay = 500;

setTimeout(function() {
    window.location.replace("perfil.php");
}, delay);
</script>
</body>
</html>
