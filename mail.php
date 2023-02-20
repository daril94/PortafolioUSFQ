<?php

//librerias
require 'PHPMailer\PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "mail@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username = 'aviladaril@gmail.com'; //nombre usuario
$mail->Password = 'darilvago1216'; //contraseña

//Agregar destinatario
$mail->AddAddress('aviladaril@gmail.com');
$mail->Subject = 'Mensaje en la pagina';
$mail->Body = 'La persona llamada: ' . $_POST['name'] . '      Con el mail: ' . $_POST['email'] . '      ha dejado el siguiente mensaje: ' . $_POST['message'];

//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo '<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo '<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
