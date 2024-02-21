<?php
    session_start();
    include 'conexion_bd.php';

    $correo = $_POST['correo1'];
    $contrasena = $_POST['password1'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
    correo = '$correo' and contraseña= '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenido.php");
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe, registrese");
                window.location = "../login_register.php";
            </script>';
        exit;
    }
?>
