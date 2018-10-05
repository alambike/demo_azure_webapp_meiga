<?php

    require("lib/validar_entorno.php");

    //validamos entorno
    // if(!validar_entorno()){
    //     header("Location: lib/error.php");
    // }
    
    define("VERSION", "1.0");
    define("USUARIO", "J.Gomez");

    function version(){
        echo VERSION;
    }

    function usuario(){
        echo USUARIO;
    }

?>

<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

    
        <link rel="stylesheet" href="/css/base.css">

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-3 align-text-bottom">
                </div>
                <div class="col-6">

                    <header>Benvid@ a Docker-Meiga!!</header>


                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3 align-text-bottom">
                    <p class="info version">v <?php version() ?></p>
                </div>
                <div class="col-6">
                </div>
                <div class="col-3 align-text-bottom">
                    <p class="info docente">Usuario: <?php usuario() ?></p>
                </div>
            </div>

        </div>

        <div class="lienzo">
            <div class="lua"></div>
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>

            <div class="avatar meiga" id="meiga"></div>

        </div>        

        <script type="text/javascript" src="js/meiga.js"></script>

    <div class="fraga"></div>
    </body>

</html>





