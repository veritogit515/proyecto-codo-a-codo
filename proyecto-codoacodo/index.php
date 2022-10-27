<?php
    $destino= "verito515@gmail.com";
    $nombre = $ _POST['nombre'];
    $apellido = $ _POST['apellido'];
    $domicilio = $ _POST['domicilio'];
    $email = $ _POST['email'];
    $celular = $ _POST['celular'];
    $servicio = $ _POST['servicio'];
    $solicitud = $ _POST['solicitud'];
    $localidad = $ _POST['localidad'];
    $comentarios = $ _POST['comentarios'];

    $contenido = "Nombre:". $nombre . "\nApellido" . $apellido ."\nDomicilio:" . $domicilio ."\nEmail:". $email . 
    "\nCelular:". $celular . "\nServicio:" . $servicio . "\nSolicitud:" . $solicitud . "\nLocalidad:"
    .$localidad . "\nComentarios:" . $comentarios ;
    mail($verito515@gmail.com,$contenido);

    header("location: gracias.html");
?>