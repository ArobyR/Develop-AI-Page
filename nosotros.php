<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aroby Rosario">
    <meta name="keywords" content="develop ai, ai, machine learning, inteligencia artificial">
    <link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <title>Develop AI | Nosotros</title>
</head>
<body>
    <div class="grid-container">
        <!-- Nav -->
        <?php 
        include_once './php/nav.php';
        ?>
        <main class="main-container">
            <div class="about__container container__sections">
                <div class="about__section section">
                    <h2 class="title title--conctact">Nosotros</h2>

                    <p class="section__paragraph">
                        Somos una startup dedicada al desarrollo de nuevas tecnologías enfocadas en el la <span class="bold">Inteligencia Artificial.</span> 
                        Nuestro objetivo es revolucionar todo el campo del <span class="bold">machine learning</span> con el unico proposito de ayudar a la humanidad mediante nuestro trabajo,
                        distribuyendo nuestros resultados y estudios por los diferentes medios como papers, conferencias, redes social y otros medios informativos.
                    </p>
                    <img src="../img/startup.jpg" alt="img-about" class="section__img--about section__img">
                </div>
                <div class="about__section section">
                    <img src="../img/code22.jpg" alt="img-about" class="section__img--about section__img">

                    <p class="section__paragraph">
                        Conocemos el potencial del <span class="bold">Open Source (softfware de código libre)</span> y de toda la comunidad de desarrolladores,
                        por ende abriremos el <span class="bold">código</span> de la mayoría de nuestros proyectos, las contribuciones mas relevantes e interesantes serán añadidas
                        y notificadas a todos. En un futuro no muy lejano hemos contemplado premiar y dar a conocer los miembros mas destacados de nuestra comunidad.
                    </p>
                </div>
                <div class="about__section section">
                    <p class="section__paragraph">
                        Nosotros hemos desarrollado varios proyectos para incentivar a aprender y estudiar los diferentes campos del desarrollo de software.
                         Nuestra visión del futuro con esto es dar a conocer la importancia de saber programar, y como esto cambia nuestras vidas al tener que aprender algo nuevo
                        cada dia. 
                    </p>
                    <img src="../img/coding.jpg" alt="img-about" class="section__img--about section__img">
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php
        include_once 'php/footer.php';
        ?>
    </div>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../main.js"></script>
</body>
</html>