<?php


session_start();

require_once('../../vendor/autoload.php');
require_once('../Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$token = $_POST['codigo'];

$user = $_SESSION['user'];

$user_factor = DB::table('user_factor')
    ->where('id_usuario', '=', $user['id'])
    ->first();

$status = 0;

$message = "";


if ($token == $user_factor->token) {
    $currentDate = new DateTime;
    $created_at = new DateTime($user_factor->fecha_creacion);
    $difference = $currentDate->diff($created_at);
    if ($difference->i < 1) {
        $user['check_token'] = 1;
        $_SESSION['user'] = $user;
        $status = 1;
        $message = "entro";
    } else {
        $status = 2;
        $message = "expiro el tiempo valido para el QR";
    }
} else {
    $message = "el QR no es valido";
}

echo json_encode(['status' => $status, 'message' => $message]);
