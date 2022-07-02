<!DOCTYPE html>
<html>

<head>
    <title>principal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>




    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">REGISTRARSE</small></h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Registrar un nuevo usuario</div>
            <form class="form-horizontal" method="POST" action="app/controllers/registrar.php" autocomplete="off">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="nombre" placeholder="Nombres" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe tus nombres">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="apellidos" placeholder="Apellidos" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe tus apellidos">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Apellidos</label>
                        </div>
                        <div class="group-material">
                            seleccione un tipo de documento:
                            <select type="text" class="material-control tooltips-general" name="tipo_documento" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="selecciona un tipo de documento">
                                <option value='cedula'>cedula</option>
                                <option value='tarjeta de identidad'>terjeta de identidad</option>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                            </select>
                        </div>
                        <div class="group-material">
                            <input type="number" class="material-control tooltips-general" name="documento" placeholder="numero de documento" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el numero de tu documento">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>numero de documento</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="telefono" placeholder="telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe un numero de telefono sin codigo de pais">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Telefono</label>
                        </div>
                        <div class="group-material">
                            <input type="email" class="material-control tooltips-general" name="correo" placeholder="correo" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe tu correo">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>correo</label>
                        </div>
                        <div class="group-material">
                            <input type="password" class="material-control tooltips-general" name="password" placeholder="contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>contraseña</label>
                        </div>
                        <div class="group-material">
                            <input type="password" class="material-control tooltips-general" name="repassword" placeholder="contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>repita contraseña</label>
                        </div>
                        <div class="group-material">
                            <input type="checkbox" class="material-control tooltips-general" name="terminos" placeholder="contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>aceptar terminos y condiciones</label>
                        </div>
                        <p class="text-center">
                            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>