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

            <div class="content__links">
                <h2 class="links__title">Siguenos</h2>
                <div class="links">
                    <!--Put the icons-->
                    <a href="#"><img src="../img/tw.png" alt="img-twitter"></a>
                    <a href="#"><img src="../img/github.png" alt="img-github"></a>
                    <a href="#"><img src="../img/discord.png" alt="img-discord"></a>
                    <a href="#"><img src="../img/email.png" alt="img-email"></a>
                    <a href="#"><img src="../img/youtube.png" alt="img-youtube"></a>
                </div>
            </div>

        </div>

        <footer class="footer-container">
            <img class="img-footer" src="../img/logo_transparent.png" alt="logo">
            
            <div class="container__links">
                <div class="links__sections">
                    <div class="links__titles"><h3>Proyectos</h3></div>
                    <hr>
                    <ul>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Machine Learning</a></li>
                        <li><a href="#">Artificial Intelligence</a></li>
                        <li><a href="#">Developers</a></li>
                    </ul>
                </div>
                <div class="links__sections">
                    <div class="links__titles"><h3>Ultimo</h3></div>
                    <hr>
                    <ul>
                        <li><a href="#">Investigacion</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Avances</a></li>

                    </ul>
                </div>

                <div class="links__sections">
                    <div class="links__titles"><h3>Recursos</h3></div>
                    <hr>
                    <ul>
                        <li><a href="#">Papers </a></li>
                        <li><a href="#">Fuentes externas</a></li>
                        <li><a href="#">Informacion</a></li>
                        <li><a href="#">Aprende</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>