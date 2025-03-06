<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $proyecto = htmlspecialchars($_POST['proyecto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de correo a la que se enviará el mensaje
    $destinatario = "marcbarberat@gmail.com";  // Reemplaza con tu correo

    // Asunto del correo
    $asunto = "Nuevo mensaje de $nombre sobre $proyecto";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Proyecto: $proyecto\n";
    $cuerpo .= "Mensaje: \n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo "¡Correo enviado con éxito!";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
