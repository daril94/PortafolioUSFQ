<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <style>
        * {
            font-size: 10px;
        }

        .form {
            width: 40em;
            height: 55em;
            background: #e6e6e6;
            border-radius: 8px;
            box-shadow: 0 0 20px -10px #000;
            margin: 2em auto;
            padding: 1em 30px;
            max-width: calc(100vw - 40px);
            position: relative;
        }

        h2 {
            margin: 10px 0;
            padding-bottom: 10px;
            width: 180px;
            color: #78788c;
            border-bottom: 3px solid #78788c;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            background: none;
            outline: none;
            resize: none;
            border: 0;
            font-family: "Montserrat", sans-serif;
            transition: all 0.3s;
            border-bottom: 2px solid #bebed2;
        }

        input:focus {
            border-bottom: 2px solid #78788c;
        }

        p:before {
            content: attr(type);
            display: block;
            margin: 28px 0 0;
            font-size: 14px;
            color: #5a5a5a;
        }

        button {
            float: right;
            padding: 8px 12px;
            margin: 8px 0 0;
            font-family: "Montserrat", sans-serif;
            border: 2px solid #78788c;
            background: 0;
            color: #5a5a6e;
            cursor: pointer;
            transition: all 0.3s;
            width: 9em;
            font-size: 1.5em;
        }

        button:hover {
            background: #78788c;
            color: #fff;
        }


        span {
            margin: 0 5px 0 15px;
        }

        .contact-dos {
            padding: 1em;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            flex-wrap: nowrap;
        }

        span {
            font-size: 2em;
        }
    </style>
</head>

<body>
    <?php require_once 'head.php'; ?>


    <div class="contenedor-parcial">
        <form class="form">
            <section>
                <h1 style="font-size: 2em; color: var(--color-principal)">ESCRIBENOS</h1>
                <b>
                    <p type="Nombre:" style="font-size: 1.5em">
                </b><input placeholder="Tu nombre..." style="font-size: 1.5em"></input></p>
                <b>
                    <p type="Correo:" style="font-size: 1.5em">
                </b><input placeholder="Tu correo..." style="font-size: 1.5em"></input></p>
                <b>
                    <p type="Mensaje:" style="font-size: 1.5em">
                </b><input placeholder="Que nos quieres decir?" style="font-size: 1.5em"></input></p>
                <button>Enviar</button>
            </section>
            <br><br><br><br>
            <section class="contact-dos" style="text-align: center; font-size:2em">
                <span class="icon-mobile"></span> <b style="font-size: .8em">+593 969011376</b>
                <span class="icon-envelop"></span> <b style="font-size: .8em">contacto@darilstudio.com</b>
            </section>
        </form>

    </div>
<div style="margin-bottom: 250px">

</div>

    <?php require_once 'footer.php'; ?>
</body>

</html>