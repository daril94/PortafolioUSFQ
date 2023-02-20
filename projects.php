<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Proyectos</title>
</head>

<body>
    <?php require_once 'head.php'; ?>
    <div class="contenedor-parcial">
        <header class="header-proyectos">
            <div class="logo-proyectos">
                <h1>
                    <img src="img/logonb.png" style="width: 7em">
                    <br>
                    <h3>
                        Daril Studio
                    </h3>
                </h1>
                <p>
                    Agencia de Desarrollo y Diseño
                </p>
            </div>

            <div class="categorias-proyectos" id="categorias-proyectos">
                <a href="#" class="active">Todos</a>
                <a href="#">Fotografía</a>
                <a href="#">Video</a>
                <a href="#">Desarrollo</a>
                <a href="#">Juegos</a>

            </div>

        </header>


        <section class="grid" id="grid">
            <div class="item" data-categoria="juegos" data-etiquetas="juegos games">
                <div class="item-contenido">
                    <a href="projectGame1.php">
                        <img src="img/c-juego1.png" alt="">
                    </a>
                </div>
            </div>

            <div class="item" data-categoria="video" data-etiquetas="video">
                <div class="item-contenido">
                    <a href="projectVideo1.php">
                        <img src="img/c-video1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item" data-categoria="fotografía" data-etiquetas="foto photo">
                <div class="item-contenido">
                    <a href="projectPhoto1.php">
                        <img src="img/c-foto1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item" data-categoria="desarrollo" data-etiquetas="develop desarrollo">
                <div class="item-contenido">
                    <a href="projectDevelop2.php">
                        <img src="img/c-desarrollo2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item" data-categoria="video" data-etiquetas="video">
                <div class="item-contenido">
                    <a href="projectVideo2.php">
                        <img src="img/c-video2.png" alt="">
                    </a>
                </div>
            </div>

            <div class="item" data-categoria="desarrollo" data-etiquetas="develop desarrollo">
                <div class="item-contenido">
                    <a href="projectDevelop1.php">
                        <img src="img/c-desarrollo1.png" alt="">
                    </a>
                </div>
            </div>

        </section>
    </div>

    <div style="margin-bottom: 250px">

</div>
    <?php require_once 'footer.php'; ?>
    <script src=" https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"> </script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="js/darilStudio.js" type="text/javascript"></script>
<div style="margin-bottom: 250px">

</div>
</body>

</html>