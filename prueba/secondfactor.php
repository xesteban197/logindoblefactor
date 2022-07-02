<!DOCTYPE html>
<html>

<head>
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
    <link rel="stylesheet" href="css/login.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/jsqrcode/qrcode.min.js"></script>

</head>

<body class="full-cover-background" style="background-image:url(assets/img/Fondo_Login.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
        </p>
        <h4 class="text-center all-tittles" style="margin-bottom: 30px;">segundo factor de auenticacion</h4>
        <p>por facor escanee su codigo QR enviado al correo</p>

        <div id='reader' style="width: 350px; height: 250px;">
            <video id='previsualreaderizacion' class="p-1 border" style="width:100%;"></video>
        </div>

    </div>

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript">
        var scanner = new Instascan.Scanner({
            video: document.getElementById('previsualreaderizacion'),
            scanPeriod: 5,
            mirror: false
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('no se encontraronn camaras');
                alert('camaras no encontradas');
            }
        }).catch(function(e) {
            console.error(e);
            alert("ERROR:" + e);
        });
        scanner.addListener('scan',
            function(respuesta) {
                $.ajax({
                    type: 'post',
                    url: 'app/Controllers/validatetoken.php',
                    data: {
                        codigo: respuesta
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (res.message.length > 0) {
                            alert(res.message);
                        }

                        if (res.status == 1) {
                            window.location = 'inicio.php';
                        } else if (res.status == 2) {
                            window.location = 'index.php';
                        }
                    }
                })
            },
        );
    </script>
</body>

</html>