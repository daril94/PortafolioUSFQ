<head>
    <meta charset="UTF-8">
    <title>Proyecto Foto 1</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.css" rel="stylesheet" type="text/css" />


<style>
    p{
        color: black;
    }
</style>
</head>

<body>
    <?php require_once 'head.php'; ?>


    <div class="contenedor-index" style="background-image: radial-gradient(circle, var(--color-auxiliar), var(--color-noblanco));">
        <div class="fotos">
            <div class="titulo">
                Proyecto Foto: 2'15
                <p style="font-size: 2rem; font-weight:400">
                    En este proyecto fotográfico se plasma a manera de documental la vida de un jugador de baloncesto que mide 2’15m. </p>
            </div>
            <div class="gallery foto" style="text-align: center">
                <div class="item-foto">
                    < <a href="img\Foto\pf1_1.jpg" data-caption="Muchas veces es complicado ser alto">
                        <img src="img\Foto\pf1_1t.jpg" alt="First image">
                        <p style="font-size: 3em; text-align:center; padding-top:1em">
                            Diario vivir
                        </p>
                        </a>

                </div>

                <div class="item-foto" style="text-align: center">
                    <a href="img\Foto\pf1_2.jpg" data-caption="Dentro de cancha se ve la diferencia en estatura">
                        <img src="img\Foto\pf1_2t.jpg" alt="Second image">
                        <p style="font-size: 3em; text-align:center; padding-top:1em">
                            Dentro de cancha
                        </p>
                    </a>

                </div>

                <div class="item-foto " style="text-align: center">
                    <div class="item-contenido">
                        <a href="img\Foto\pf1_3.jpg" data-caption="Fuera de cancha, ser alto determinada muchas cosas">
                            <img src="img\Foto\pf1_3t.jpg" alt="Third image">
                            <p style="font-size: 3em; text-align:center; padding-top:1em">
                                Fuera de cancha
                            </p>
                        </a>

                    </div>
                </div>



            </div>
        </div>

    </div>

    <div style="margin-bottom: 250px">
    </div>
    <?php require_once 'footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.js" type="text/javascript"></script>
    <script>
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery');
        });
    </script>
</body>

</html>