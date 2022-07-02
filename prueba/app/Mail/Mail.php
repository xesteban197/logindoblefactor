<?php

class Mail
{
    protected static function getMail()
    {

        $mail = new PHPMailer;

        $mail->isSMTP();

        $mail->Host = 'smtp.mailtrap.io';

        $mail->SMTPAuth = true;

        $mail->Username = '8cbcfe29869f5d';

        $mail->Password = '612b1daa0a5cf3';

        $mail->SMTPSecure = 'tls';

        $mail->Port = 2525;

        return $mail;
    }

    public static function enviomensaje($email, $name, $attachements, $subject, $message)
    {
        $mail = self::getMail();

        $mail->setFrom('noreply@test', 'Segundofactor');

        $mail->addAddress($email, $name);

        $mail->addAttachment($attachements);

        $mail->isHTML(true);

        $mail->Subject = $subject;

        $mail->Body = $message;

        if (!$mail->send()) {
            return 'ERROR AL ENVIAR EL CORREO ' . $mail->ErrorInfo;
        }

        return 'EL MENSAJE SE ENVIO';
    }
}
