<?php
if(isset($_POST)) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $destinatario = 'mail@mail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tema = $_POST['tema'];
    $razon = $_POST['razon'];
    $header = $razon;
    $mensaje = $_POST['mensaje'];
    $format_string = $mensaje. ' ' . $razon . ' ' . $email . '\n' . $nombre;
    $mensaje_completo = wordwrap($format_string);

    $succes = mail($destinatario, $tema, $mensaje_completo, "From: email");
    if (!$succes) {
        $errorMessage = error_get_last()['message'];
        echo $errorMessage;
    }
#    echo "<script>alert('Correo Enviado'); </script>";
    header('location: index.php');
}

?>