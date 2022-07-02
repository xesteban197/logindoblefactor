<?php

class Qrcode
{
    protected static function generateToken()
    {
        return bin2hex(random_bytes(40));
    }

    public static function generateCode($email = null)
    {
        $token = self::generateToken();
        $renderer = new \BaconQrCode\Renderer\Image\Png();

        $renderer->setHeight(256);

        $renderer->setWidth(256);

        $writer = new \BaconQrCode\Writer($renderer);

        $folder = self::getFolder($email);

        $writer->writeFile($token, $folder . '/code.png');

        return $token;
    }

    protected static function getFolder($name)
    {
        if (!file_exists('../../imagesqr/' . $name)) {

            mkdir('../../imagesqr/' . $name);
        }
        return '../../imagesqr/' . $name;
    }
}
