<?php

//Esto es al correo al que se enviara el mensaje
    $destinatario = 'floraguirre1598@gmail.com';

    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];
    $email = $_POST["email"];


    $header = "Enviado desde la pagina de KSS Abogados";
    $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;

    mail($destinatario, $mensajeCompleto , $header);

    echo "<script>alert('correo enviado correctamente')</script>";
    echo "<script>setTimeOut(\"location.href='index.html'\",1000)</script>";

?>