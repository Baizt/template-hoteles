<?php
    //var_dump($_REQUEST);
    $to = 'albaizt@gmail.com';
    $subject = 'Formulario';
    $message = "Nombre: ".$_REQUEST["nombre"]."\n";
    $message = "Telefono: ".$_REQUEST["telefono"]."\n";
    $message .= "Correo: ".$_REQUEST["email"]."\n";
    $message .= "Mensaje: ".$_REQUEST["mensaje"];
    //var_dump($message);
    mail($to, $subject, $message);
    die();
?>