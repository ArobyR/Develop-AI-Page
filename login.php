<?php
    session_start();
    $error = '';
    include_once './admin/user.php';

    if($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $obj_user = new User();
        $result = $obj_user->get_user($name, $email);
        // print_r($result);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['login_user'] = $name;
            $_SESSION['login_auth'] = $email;
            header('location:index.php');
        }
        else {
            $error = "Usuario o Contrasenia incorrecta";
        }
    }
?>