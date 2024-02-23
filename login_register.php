<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:bienvenido.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="icon/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style_login_register.css">
</head>
<body>
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
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo1">
                    <input type="password" placeholder="Contraseña" name="password1">
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <br><br><br><br><br><br><div class="info">
        <h5 id="derechos">Todos los derechos reservados</h5>
        <button id="btn_insta"></button>
        <button id="btn_youtube"></button>
        <button id="btn_github"></button>
    </div>
<script src="js/main.js"></script>
</body>
</html>
