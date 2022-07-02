<?php
require_once('../../vendor/autoload.php');
require_once('../Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];



DB::table('usuario')->insert([
    'nombre' => $nombre,
    'apellidos' => $apellidos,
    'tipo_documento' => $tipo_documento,
    'documento' => $documento,
    'telefono' => $telefono,
    'correo' => $correo,
    'password' => $password
]);

echo "grabo";
