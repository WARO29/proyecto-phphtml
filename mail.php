<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendMail($subject, $body, $email, $name, $html = false){
    //Configuracion inicial de nuestro servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '9a51f9a4861dc2';
    $phpmailer->Password = '3938cc11312c38';

    //anadir destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email , $name);     //Add a recipient

    //definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //mandar el correo.
    $phpmailer->send();

}










