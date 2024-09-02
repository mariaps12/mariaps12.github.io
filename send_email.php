<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configura el correo
    $to = 'mpuchesanchiz@gmail.com'; // Cambia esto al correo de destino
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";

    // Envía el correo
    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.";
    }
}
?>
