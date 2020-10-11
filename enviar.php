<?php
    $destino= "sgarnica1902@gmail.com";
    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];
    $mensaje= $_POST["mensaje"];
    $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "n\Teléfono: " . $telefono . "\nMensaje: " . $mensaje;
    mail ($destino, "Mensaje nuevo en formulario", $contenido);
    header("Location:index.html");
?>