<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email no válido.";
        exit;
    }
    $asunto = "Mensaje de $nombre";
    $contenido = "Nombre: $nombre\n";
    $contenido.= "Correo: $email\n";
    $contenido.= "Mensaje: \n$mensaje\n";

    ini_set("SMTP", "smtp.gmail.com");
    ini_set("smtp_port", "587");

    if (mail("nacheruddin22@gmail.com", $asunto, $contenido)){
        header("Location: index.html");
        echo "Mensaje enviado correctamente.";
        exit;
    } else {
        echo "El mensaje no se ha podido mandar.";
    }

}

$conexion = new mysqli("localhost", "usuario", "contraseña", "mi_base_de_datos");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta SQL para obtener datos de la tabla usuarios
$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

// Mostrar resultados en tu página HTML
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Email: " . $fila["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conexion->close();
