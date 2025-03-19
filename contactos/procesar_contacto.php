<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos (puedes agregar más validaciones si es necesario)
    if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
        // Enviar un correo (opcional)
        $destinatario = "sagrerosantiago4@gmail.com"; // Cambia esto a tu correo
        $asunto = "Nuevo mensaje de $nombre";
        $cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
        $headers = "From: $correo";

        // Enviar el correo
        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
            echo "Mensaje enviado con éxito!";
        } else {
            echo "Hubo un error al enviar el mensaje.";
        }

        // Aquí también podrías guardar los datos en una base de datos si lo prefieres
        // Ejemplo de guardado en base de datos (solo un ejemplo, no olvide sanitizar los datos)
        /*
        $conn = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "Mensaje guardado correctamente!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        */
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
