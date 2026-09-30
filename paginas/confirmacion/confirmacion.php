<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./stylesConfirmacion.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
        
    <link rel="icon" type="image/png" href="../../favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../../favicon/favicon.svg" />
    <link rel="shortcut icon" href="../../favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="LOTR" />
    <link rel="manifest" href="../../favicon/site.webmanifest" />
    
    <title>Confirmacion</title>
</head>

<body>
    <?php
        include_once '../../componentes/nav/nav.php'
    ?>
    <main class="containerConfimacion">
        <?php 

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $erroresFormulario = [];

                $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
                $apellido = htmlspecialchars(trim($_POST['apellido'] ?? ''), ENT_QUOTES, 'UTF-8');
                $email = htmlspecialchars(trim($_POST['email'] ?? ''), ENT_QUOTES, 'UTF-8');
                $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''), ENT_QUOTES, 'UTF-8');
                
                /* Validaciones de nombre */
                if(!isset($_POST['nombre']) || empty($nombre)){
                    $erroresFormulario[] = "Ingrese un nombre";
                }

                if (!empty($nombre) && strlen($nombre) < 3) {
                    $erroresFormulario[] = "Ingrese un nombre con 3 o mas caracteres";
                }

                /* Validaciones de apellido */
                if(!isset($_POST['apellido']) || empty($apellido)){
                    $erroresFormulario[] = "Ingrese un apellido";
                }

                /* Validaciones de email */
                if (!isset($_POST['email']) || empty($email)) {
                    $erroresFormulario[] = "El email es obligatorio";
                }

                if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $erroresFormulario[] = "Ingrese un email valido";
                }

                /* Validaciones de Motivo del contacto */
                if (!isset($_POST['motivoContacto'])) {
                    $erroresFormulario[] = "El motivo del contacto es obligatorio";
                }

                /* Validaciones de mensaje */
                if (!isset($_POST['mensaje']) || empty($mensaje)) {
                    $erroresFormulario[] = "El mensaje de consulta es obligatorio";
                }

                if(!empty($erroresFormulario)){
                    echo "
                        <div class='containerMessage containerGlass'>
                            <h2>Por favor compruebe los siguentes errores al completar el formulario</h2>
                            <h3>";
                            foreach ($erroresFormulario as $error) {
                                echo $error . "<br>";
                            };
                            echo "</h3>
                            <a class='buttonReturnHome' href='../contacto/contacto.php'>Volver al contacto</a>
                        </div>";
                }else{
                    $message = '';
                    switch ($_POST['motivoContacto']) {
                        case '1':
                            $message = "<h3>Estaremos revisando su mensaje en la brevedad</h3>";
                            break;
                        case '2':
                            $message = "<h3>Estaremos revisando el error reportado en la brevedad</h3>";
                            break;
                        case '3':
                            $message = "<h3>Estaremos revisando la correción reportada en la brevedad</h3>";
                            break;
                        case '4':
                            $message = "<h3>Estaremos revisando su recomendación en la brevedad</h3>";
                            break;
                        default:
                            $message = "<h3>Estaremos revisando su mensaje en la brevedad</h3>";
                            break;
                    }
                    echo "
                        <div class='containerMessage containerGlass'>
                            <h2>" . $_POST['nombre'] . " " . $_POST['apellido'] . " se confirmo el envío del formulario con el email " . $_POST['email'] . "</h2>". $message
                            . "<h3>Muchas gracias por responder</h3>
                            <a class='buttonReturnHome' href='../../index.php'>Volver al inicio</a>
                        </div>";
                }
            }else{
                echo "
                    <div class='containerMessage containerGlass'>
                        <h2>Por favor ingrese por la pagina de contacto</h2>
                        <h3>Muchas gracias</h3>
                        <a class='buttonReturnHome' href='../contacto/contacto.php'>Volver al contacto</a>
                    </div>";
            }
        ?>
    </main>
    <?php
        include_once '../../componentes/footer/footer.php'
    ?>
</body>

</html>