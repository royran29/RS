
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
    <title>Subway</title>
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

    <?php

        $premio = "null";
        $mensaje = "";
        $footer = "";

        if(isset($_GET['premio'])){
            $premio = $_GET['premio'];
        }

        switch($premio){
            case "sub":
                $mensaje = "Tomá captura de este código y presentalo en tu restaurante favorito antes del...";
                $footer = "Te recomendamos conservar tu factura. Recordá canjear tu premio antes del periodo de vencimiento. Consultá condiciones completas de la promoción aquí";
                break;
            case "sin premio":
                break;
            case "mochila":
                break;
            case "coca":
                break;
            default:
        }
        
        
        
    ?>


    <!-- Content -->
    <div class="container green-background-info">
        <?php if($premio == 'sub' || $premio == 'mochila' || $premio == 'coca' ) {?>
            <div class="premio-raspa">
                <h1 class="yellow-text footlong">¡Felicidades!</h1>
                <div class="img-premio-raspa">
                    <img src="<?= 'img/' . $premio . '.png' ?>" alt="Premio">
                </div>
            </div>
            
        <?php } ?>

        <?php if($premio == "sin premio") {?>
            <div class="banderines">
                <img src="img/Raspas/Banderines.png" alt="Banderines">
            </div>
            <div class="content premio sin-premio-raspa"> 
                <h2 class="yellow-text footlong">¡Intentalo de nuevo!</h2>
                <p class="white-text footlong">La suerte te acompañará</p>
                <a href="index.php"><img id="imgVolver" src="img/Raspas/Botones/Volver.png" alt="Volver"></a>
                <p class="white-text sixInch condiciones">Consultá condiciones completas de la promoción <span><a href="#" class="yellow-text no-underline">aquí</a></span></p>
                <div class="logos">
                    <img src="img/Raspas/S Subway.png" alt="S Subway">
                    <img src="img/Raspas/Coca Cola.png" alt="Coca Cola">
                </div>
            </div>
        <?php } ?>
    </div>
        
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
