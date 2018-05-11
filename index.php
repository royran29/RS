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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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
        <div class="container green-background-info">

            <!-- Modal -->
            <div id="ex1" class="modal">
                <img src="img/Raspas/Factura.png" alt="Factura">
            </div>

            <div class="form-header">
                <img src="img/Raspas/IngresaGana.png" alt="Header" >
            </div>
            <div class="content">
                <div class="form-title">
                    <p class="white-text sixInch">Por cada factura que incluya la compra de un combo, podés participar por premios instatáneos.</p>
                    <p class="white-text footlong">Ingresá los siguientes datos de tu factura para particpar.</p>
                    <a href="#ex1" rel="modal:open" class="yellow-text no-underline">¿Dónde encuentro los datos?</a>
                </div>

                <div class="form">
                    <form action="premio.php" novalidate method="post" id="contact_form">
                        <div class="form-group">
                            <label for="factura">N&uacute;mero de factura</label>
                            <input class="form-control"  type="text" name="factura" id="factura" required>
                        </div>

                        <div class="form-group">
                            <label for="place">N&uacute;mero de restaurante</label>
                            <input class="form-control"  type="text" name="num_place" id="place" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha de compra</label>
                            <input class="form-control" value="<?php echo date("d/m/Y");?>" type="date" name="fecha" id="fecha" required>
                        </div>

                        <div class="form-group">
                            <label for="total">Monto total</label>
                            <input  class="form-control" type="number" name="total" id="total" required>
                        </div>

                        <div class="form-group">
                            <label for="favorite_place">¿Cuál es tu restaurante favorito?</label>
                            <select name="favorite_place" id="favorite_place" class="form-control" required>
                                <option value=""></option>
                                <option value="Alajuela Centro">Alajuela Centro</option>
                                <option value="AM Tres Ríos">AM Tres Ríos</option>
                                <option value="American Free Zone">American Free Zone</option>
                                <option value="Anonos">Anonos</option>
                                <option value="Avenida Escazú">Avenida Escazú</option>
                                <option value="Avenida Segunda">Avenida Segunda</option>
                                <option value="Bambu">Bambu</option>
                                <option value="Barva">Barva</option>
                                <option value="Bulevar">Bulevar</option>
                                <option value="CalderonGuardia">Calder&oacute;n Guardia</option>
                                <option value="Calle2">Calle 2</option>
                                <option value="Cartago">Cartago</option>
                                <option value="City Mall">City Mall</option>
                                <option value="City Plaza">City Plaza</option>
                                <option value="Ciudad Quesada">Ciudad Quesada</option>
                                <option value="Clinica Bíblica">Clinica Bíblica</option>
                                <option value="Coronado">Coronado</option>
                                <option value="Curridabat">Curridabat</option>
                                <option value="Desamparados">Desamparados</option>
                                <option value="El Coco">El Coco</option>
                                <option value="Escazú">Escazú</option>
                                <option value="Forum II">Forum II</option>
                                <option value="Global Park">Global Park</option>
                                <option value="Grecia">Grecia</option>
                                <option value="Guápiles">Guápiles</option>
                                <option value="Guachipelín">Guachipelín</option>
                                <option value="Guadalupe">Guadalupe</option>
                                <option value="Heredia">Heredia</option>
                                <option value="Intel 2">Intel 2</option>
                                <option value="Jaco Tangerí">Jaco Tangerí</option>
                                <option value="Jaco Walk">Jaco Walk</option>
                                <option value="Lagunilla">Lagunilla</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Limón">Limón</option>
                                <option value="Limonal">Limonal</option>
                                <option value="Lindora">Lindora</option>
                                <option value="Mall San Pedro">Mall San Pedro</option>
                                <option value="MultiFlores">MultiFlores</option>
                                <option value="Multiplaza del Este">Multiplaza del Este</option>
                                <option value="Multiplaza Escazu">Multiplaza Escazu</option>
                                <option value="Nicoya">Nicoya</option>
                                <option value="Paseo Colón">Paseo Colón</option>
                                <option value="Paseo las Flores">Paseo las Flores</option>
                                <option value="Paseo Metropoli">Paseo Metropoli</option>
                                <option value="Perez Zeledon">Perez Zeledon</option>
                                <option value="Pinares">Pinares</option>
                                <option value="Plaza Carolina">Plaza Carolina</option>
                                <option value="Plaza del Sol">Plaza del Sol</option>
                                <option value="Plaza Herradura">Plaza Herradura</option>
                                <option value="Plaza Lincoln">Plaza Lincoln</option>
                                <option value="Plaza Mayor">Plaza Mayor</option>
                                <option value="Plaza Real">Plaza Real</option>
                                <option value="Plaza Roble">Plaza Roble</option>
                                <option value="Plaza San Francisco Heredia">Plaza San Francisco Heredia</option>
                                <option value="Plaza">Plaza</option>
                                <option value="Quepos">Quepos</option>
                                <option value="Real Cariari">Real Cariari</option>
                                <option value="Rohrmoser">Rohrmoser</option>
                                <option value="Sabana">Sabana</option>
                                <option value="Sabanilla">Sabanilla</option>
                                <option value="San Francisco Dos Ríos">San Francisco Dos Ríos</option>
                                <option value="San Pedro">San Pedro</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Santo Domingo">Santo Domingo</option>
                                <option value="Tamarindo">Tamarindo</option>
                                <option value="Tecnológico Cartago">Tecnológico Cartago</option>
                                <option value="Terramall">Terramall</option>
                                <option value="Terrazas">Terrazas</option>
                                <option value="Tibas">Tibas</option>
                                <option value="Torres Colon">Torres Colon</option>
                                <option value="Torres del Lago">Torres del Lago</option>
                                <option value="Tournón">Tournón</option>
                                <option value="U Latina">U Latina</option>
                                <option value="Uruca">Uruca</option>
                                <option value="Vía Colon">Vía Colon</option>
                                <option value="Yoses">Yoses</option>
                                <option value="Zapote">Zapote</option>
                            </select>
                        </div>
                        <div class="form-group">  
                            <input class="form-control" type="checkbox" name="Accept" id="Accept" checked required><label for="Accept">Acepto <a href="#" class="yellow-text no-underline footlong">t&eacute;rminos y condiciones</a> de la promoci&oacute;n</label>
                        </div>

                        <div class="end-form">
                            <div class="submit-form">
                                <input type="submit" value="Validar" class="sixInch">
                            </div>
                            <div class="logos-end-form">
                                <img src="img/Raspas/S Subway.png" alt="S subway">
                                <img src="img/Raspas/Coca Cola.png" alt="Coca Cola">
                            </div>
                        </div>
                    </form>
                </div>      
            </div>
        </div>
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        

    </body>
</html>
