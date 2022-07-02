<?php

session_start();

require_once('../../vendor/autoload.php');
require_once('../Database/Database.php');
require_once('../Mail/Mail.php');
require_once('../QrCodes/QrCode.php');

use Illuminate\Database\Capsule\Manager as DB;

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$user = DB::table('usuario')
    ->where('correo', '=', $correo)
    ->first();

if ($user == null) {
    header('Location: http://localhost/pruebaSUNTIC/prueba/inicio.php');
}


if ($pass != $user->password) {
    die('<br> error contraseña');
}

$token = QrCode::generateCode($correo);

if (DB::table('user_factor')->where('id_usuario', '=', $user->id_usuario)->first() == null) {
    DB::table('user_factor')->insert([
        'id_usuario' => $user->id_usuario,
        'token' => $token,
        'fecha_creacion' => new DateTime,
    ]);
} else {
    DB::table('user_factor')
        ->where('id_usuario', '=', $user->id_usuario)
        ->update([
            'token' => $token,
            'fecha_creacion' => new DateTime,
        ]);
}

Mail::enviomensaje($user->correo, $user->nombre, '../../imagesqr/' . $user->correo . '/code.png', 'autenticate', '<b>por favor abra la imagen y escanee el codigo QR</b>');

$_SESSION['user'] = array('id' => $user->id_usuario, 'nombre' => $user->nombre, 'correo' => $user->correo, 'check_token' => 0);


header('Location: http://localhost/pruebaSUNTIC/prueba/secondfactor.php');
