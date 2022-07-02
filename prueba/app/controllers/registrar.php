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


if (DB::table('usuario')->where('correo', '=', $correo)->first() == null) {

    if ($repassword == $password) {
        echo '<script>
    alert("registro exitoso");
    window.location.href="../../index.php";
    </script>';
    } else {
        echo '<script>
    alert("las contraseñas no cohinciden");
    window.location.href="../../registro.php";
    </script>';
    }
} else {
    echo '<script>
    alert("el correo ya esta registrado");
    window.location.href="../../registro.php";
    </script>';
}


DB::table('usuario')->insert([
    'nombre' => $nombre,
    'apellidos' => $apellidos,
    'tipo_documento' => $tipo_documento,
    'documento' => $documento,
    'telefono' => $telefono,
    'correo' => $correo,
    'password' => $password
]);
