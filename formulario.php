<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style_form.css">
    <script src="js/main.js"></script>
</head>
<body>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="index.html"></span>Inicio</a></li>
                <li><a href="#">Apartados</a>
                    <ul class="submenu1">
                        <li><a href="#">C++</a></li>
                        <li><a href="#">Python</a></li>
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
            </ul>
        </nav>
    </header>
    <div class="tit_form">
        <h3>Formulario (Temporalmente deshabilitado)</h3>
        <h4>(Para preguntas sobre la página)</h4>
    </div>
    <div class="formulario">
        <form action="php/enviar.php" method="post">
            <label id="name" for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" required><br><br>

            <label id="correo" for="email">Correo electrónico:</label><br>
            <input type="email" name="email" id="email"><br><br>

            <label id="descripcion" for="mensaje">Descripción:</label><br>
            <textarea name="mensaje" id="mensaje" cols="50" rows="4" required></textarea><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="info">
        <h5 id="derechos">Todos los derechos reservados</h5>
        <button id="btn_insta"></button>
        <button id="btn_youtube"></button>
        <button id="btn_github"></button>
    </div>
</body>
</html>
