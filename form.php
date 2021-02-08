<?php
    include_once './login.php';
    if (isset($_SESSION['login_user']) != null) {
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/contacto.css">
    <title>Formulario</title>
</head>

<body>
    <div class="main__container" style="height: 100vh;">
        <h2 class="title title--conctact">Log in</h2>
        <div class="container__form" style="height: 50vh;">
            <form class="form" action="login.php" method="POST">
                <label for="name" class="form__label">Nombre:</label>
                <input type="text" class="form__input" name="name" id="nombre" placeholder="Introducir nombre">
                <label for="email" class="form__label">Email</label>
                <input type="email" name="email" id="email" class="form__input" placeholder="Introducir email">
                <input type="submit" value="Enviar" class="form__btnsubmit">
            </form>
        </div>
    </div>
</body>

</html>