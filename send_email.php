<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Configura el correo
    $to = "alvarolara079@gmail.com"; // Cambia esto por tu correo
    $subject = "Nuevo mensaje de $name desde tu portfolio";
    $body = "Nombre: $name\n\nMensaje:\n$message";
    $headers = "From: no-reply@tu-dominio.com";

    // Envía el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Correo enviado exitosamente.'); window.location.href = 'gracias.html';</script>";
    } else {
        echo "<script>alert('Hubo un problema al enviar el correo. Por favor, intenta nuevamente.'); window.history.back();</script>";
    }
} else {
    echo "Método no permitido";
}
?>
