<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./stylesContacto.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../../favicon/favicon.svg" />
    <link rel="shortcut icon" href="../../favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="LOTR" />
    <link rel="manifest" href="../../favicon/site.webmanifest" />

    <title>Contacto</title>
</head>

<body>
    <?php
        include_once '../../componentes/nav/nav.php'
    ?>
    <main>
        <img src="" alt="">
        <h2>Contacto</h2>
        <form method="POST" action="../confirmacion/confirmacion.php"
            class="contornoCajas formulario">

            <!-- <input type="hidden" name="_next"
                value="https://sebatianvera-source.github.io/Web-ComisionB/paginas/confirmacion/confirmacion.html">
            <input type="hidden" name="_captcha" value="false"> -->

            <div class="camposFormulario">
                <label for="nombre">Ingrese su nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre">

                <label for="apellido">Ingrese su apellido:</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido">

                <label for="email">Ingrese su email:</label>
                <input type="email" name="email" id="email" autocomplete="on" placeholder="Email">

                <label>Motivo del Contacto</label>

                <div class="row containerValoracion grid">
                    <div>
                        <label for="recomendaciones">Recomendaciones</label>
                        <input type="radio" name="motivoContacto" id="recomendaciones" value="4">
                    </div>

                    <div>
                        <label for="correciones">Correcciones</label>
                        <input type="radio" name="motivoContacto" id="correciones" value="3">
                    </div>

                    <div>
                        <label for="erroes">Errores</label>
                        <input type="radio" name="motivoContacto" id="erroes" value="2">
                    </div>

                    <div>
                        <label for="otros">Otros</label>
                        <input type="radio" name="motivoContacto" id="otros" value="1">
                    </div>
                </div>

                <label for="mensaje">Ingrese su consulta, comentarios, recomendaciones</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </div>


            <div class="contenedorBoton">
                <button type="submit" class="btnEnviar">Enviar</button>
            </div>

        </form>
    </main>
    <?php
        include_once '../../componentes/footer/footer.php'
    ?>
</body>

</html>