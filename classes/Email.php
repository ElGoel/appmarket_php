<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function confirmationSend()
    {
        // Crear el Objeto de Email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '8ee1f216ce44a7';
        $mail->Password = '158ce2b846ead5';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'appsalon.com'); // </ dominio de ejemplo
        $mail->Subject = 'Confirma tu Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UFT-8';

        $content = '<html>';
        $content .= "<p><strong>Hola " . $this->email . "</strong> Has creato tu cuenta en App Salon, Debes confirmarla presionando el siguiente enlace</p>";
        $content .= "<p>Preciona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $content .= "<p>Si no solicitaste este cambio, ignora este mensaje</p>";
        $content .= '</html>';
        $mail->Body = $content;

        //Enviar el Email
        $mail->send();
    }

    public function sendInstructions() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '8ee1f216ce44a7';
        $mail->Password = '158ce2b846ead5';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'appsalon.com'); // </ dominio de ejemplo
        $mail->Subject = 'Reestablece tu Password';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UFT-8';

        $content = '<html>';
        $content .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo</p>";
        $content .= "<p>Preciona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer Password</a></p>";
        $content .= "<p>Si no solicitaste este cambio, ignora este mensaje</p>";
        $content .= '</html>';
        $mail->Body = $content;

        //Enviar el Email
        $mail->send();
    }
}
