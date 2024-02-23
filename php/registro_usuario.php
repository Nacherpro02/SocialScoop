<?php

    include 'conexion_bd.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];
    $contrasena = hash('sha256', $contrasena);

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contraseña)
        VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo "<script>
                alert('Correo ya registrado, intente con otro');
                window.location.href = '../login_register.php';
              </script>";
        exit();
    }

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo "<script>
                alert('Usuario ya registrado, intente con otro');
                window.location.href = '../login_register.php';
              </script>";
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo'
        <script>
            alert("Usuario creado correctamente");
            window.location = "../index.php";
        </script>';
    } else {
        echo '
        <script>
            alert("Usuario no creado");
            window.location = "../login_register.php";
        </script>';
    }
mysqli_close($conexion);
?>
