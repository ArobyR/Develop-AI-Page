<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="Aroby Rosario">
    <meta name="keywords" content="develop ai, ai, machine learning, inteligencia artificial">
    <link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Develop AI | Contactanos</title>
</head>
<body>
    <div class="grid-container">
        <!-- Nav -->
        <?php 
        include_once './php/nav.php';
        ?>

        <div class="main__container">
            <h2 class="title title--conctact">Envianos un email</h2>
            <div class="container__form">
                <form class="form" action="" method="post">
                    <!--name of the person-->
                    <label class="form__label" for="Nombre">Nombre</label>
                    <input class="form__input" required="required" type="text" name="Nombre" id="Nombre">
                    <!--email address-->
                    <label class="form__label" for="Email">Direccion de correo</label>
                    <input class="form__input" required="required" type="Email" name="Email" id="Email">
                    <label class="form__label" for="Tema">Tema</label>
                    <input class="form__input" required="required" type="text" name="Tema" id="Tema">
                    <label class="form__label" for="Razon">Razon</label>
                    <select class="form__select" name="razon" id="razon">
                        <option class="select__option" value="Software">Software</option>
                        <option class="select__option" value="Desarrollo de AI">Desarrollo de AI</option>
                        <option class="select__option" value="Negocios">Negocios</option>
                        <option class="select__option" value="Informacion">Informacion</option>
                        <option class="select__option" value="Otro">Otro</option>
                    </select>
                    <label class="form__label" for="Mensaje">Mensaje</label>
                    <textarea rows="5" minlength="10" maxlength="300" placeholder="..." class="form__textarea" name="Mensaje" id="Mensaje" cols="30" rows="10"></textarea>
                    <input class="form__btnsubmit" type="submit" value="Enviar">
                </form>

                <h2 class="address">Email   o  Email</h2>
            </div>
            <!-- Social media -->
            <?php
            include_once 'php/social_media.php';
            ?>
        </div>
        <?php
        include_once 'php/footer.php';
        ?>
    </div>
</body>
</html>