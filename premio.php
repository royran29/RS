<?php
	use \Datetime;
	include("database.php");
?>
<!doctype html>
<html class="no-js" lang="">
<head> 
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZDVN9M');</script>
    <!-- End Google Tag Manager -->

    <meta property="og:image" content="http://copasubway.com/img/General/fb.jpg"/>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Copa Subway</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZDVN9M"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

        <!-- Content -->
        <div class="container">
            <div>
                <div class="form-header">
                    <img src="img/General/Fondos/1.png" alt="Fondo Formulario" >
                    <div class="logos">
                        <img src="img/General/Logos/subway_logo_verde.png" alt="Logo Copa">
                    </div>
                </div>
                <div class="form-title">
                    <p class="green-text sixInch">Completá este formulario para saber si ganaste unos de nuestros premios.</p>
                </div>

                <?php
                
                    $database = new Database();
                    $db = $database->getConnection();
                    $premio = new Premio($db);
                    $premio->factura     = filter_var(trim($_POST["factura"]),     FILTER_SANITIZE_STRING);
                    $premio->total       = filter_var(trim($_POST["total"]),       FILTER_SANITIZE_STRING);
                    //$premio->restaurante = filter_var(trim($_POST["restaurante"]), FILTER_SANITIZE_STRING);
                    $premio->fecha       = filter_var(trim($_POST["fecha"]),       FILTER_SANITIZE_STRING);
                    $premio->validarPremio();
                    
                    echo $premio->estado.'<br>';

                    echo $premio->mensaje.'<br>';
                    //valores de estado
                    // "valido", "sin premio", "cambiado", "raspado", "expirado"
                    // para cada uno de ellos hay que generar una vista que esta en la pagina 2 del PDF que te envie
                    
                ?>
                <p class="cr sixInch">Imágenes con fines ilustrativos. Subway® es una marca registrada de Subway IP Inc. @2018 Subway IP Inc.</p>            
            </div>
        </div>
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        

    </body>
</html>
