<?php
    session_start();
    if (!(isset($_SESSION['login_auth']) and isset($_SESSION['login_user']))) {
        header('location:form.php');
    }
    
?>