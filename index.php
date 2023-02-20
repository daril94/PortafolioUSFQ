<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>DarilStudio</title>
    </head>

    <body>
        <?php require_once 'head.php'; ?>
        <div id="particles-js"> </div>

        <div class="contenedor-index">
            <div class="index index-logo">
                <h1>
                    <img src="img/logonb.png" style="width: 7em">
                    <br>
                    <h3 style="font-size: 4em">
                        Daril Studio
                    </h3>
                </h1>
                <p style="font-size: 2em; font-weight:700">
                    Agencia de Desarrollo y Programación
                </p>
            </div>



            <section class="index-section">
                <div class="item-index">
                    <img src="img/develop-icono.svg" alt="" />
                    <p>
                        Desarrollo
                    </p>
                </div>

                <div class="item-index">
                    <img src="img/games-icono.svg" alt="" />
                    <p>
                        Juegos
                    </p>
                </div>
                <div class="item-index">
                    <img src="img/photo-icono.svg" alt="" />
                    <p>
                        Fotografía
                    </p>

                </div>

                <div class="item-index item-final">
                    <img src="img/video-icono.svg" alt="" />
                    <p>
                        Video
                    </p>
                </div>





            </section>
        </div>

        <?php require_once 'footer.php'; ?>
        <script src="js/particles.js" type="text/javascript"></script>
        <script>
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('particles-js', 'js/particles.json', function() {
                console.log('callback - particles.js config loaded');
            });
        </script>

    </body>

</html>