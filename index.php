<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aroby Rosario">
    <meta name="keywords" content="develop ai, ai, machine learning, inteligencia artificial">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/styles.css">
    <title>Develop AI</title>
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="title-icon">
                <img src="img/logo_transparent.png" alt="logo-imagen" class="logo">
                <h2 class="title">Develop AI</h2>
            </div>
            <nav class="navigation">
                <ul class="nav-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="html/galeria.html">Galeria</a></li>
                    <li><a href="html/nosotros.html">Nosotros</a></li>
                    <li><a href="html/contacto.html">Contactanos</a></li>    
                </ul>
            </nav>
        </header>

        <!-- Using method BEM -->
        <main class="main-container">
            <div class="container__img-background">
                <a class="btn-learn" href="#">Aprende mas</a>
            </div>
            <div class="container__sections">
                <div class="section"> <!-- Block -->
                    <h1 class="section__title">Inteligencia Artificial</h1>
                    <p class="section__paragraph">
                      La Inteligencia Artificial (IA)<span class="bold"> es la combinación de algoritmos planteados con el propósito de crear máquinas
                        que presenten las mismas capacidades que el ser humano.</span> 
                        <br> <br>
                        Tipos de AI segun Stuart Russell y Peter Norvig  que clasificaron
                        cuatro tipos: sistemas que piensan como humanos, como por ejemplo las redes neuronales artificiales. 
                        Sistemas que actúan como humanos, como los robots. Sistemas que usan la lógica racional, como los sistemas expertos, y sistemas 
                        que actúan racionalmente, como los agentes inteligentes.
                    </p>
                    <img class="section__img" src="img/roboto1.jpg" alt="image-ai-info">
                </div>

                <div class="section"> 
                    <h2 class="section__title">Desarrollo de Inteligencia Artificial</h2>
                    <img class="section__img" src="img/code2.jpg" alt="image-ai-info">
                    <p class="section__paragraph">
                    El desarrollo de la inteligencia o Artificial Intelligence (AI) ha revolucionado el inmensa cantidad de campos, 
                    porque hace posible que las máquinas aprendan de la experiencia, se ajusten a las nuevas entradas y realicen tareas similares a las de los humanos. 
                    La mayoría de los ejemplos de IA que visualizan hoy, desde <span class="bold"> computadoras que juegan al ajedrez</span> hasta <span class="bold"> autos sin conductor,</span> dependen en gran medida del 
                    <span class="bold"> aprendizaje profundo </span> y el <span class="bold">procesamiento del lenguaje natural</span> como veremos mas adelante.
                    </p>
                </div>

                <div class="section"> 
                    <h2 class="section__title">OpenAI</h2>
                    <p class="section__paragraph">
                        <a href="https://openai.com/projects/" target="_blank"> <span class="bold">OpenAI</span></a> es una compañía de investigación de inteligencia artificial (IA) sin fines de lucro 
                        que tiene como objetivo promover y desarrollar inteligencia artificial amigable de tal manera que beneficie a la humanidad en su conjunto. 
                        La organización tiene como objetivo <span class="bold">"colaborar libremente"</span> con otras instituciones e investigadores al 
                        <span class="bold"> hacer sus patentes e investigaciones abiertas al público.</span> Esta compañia ha revolucionado todo este campo con avances tan grandes 
                        como: <span class="bold">GPT-3 e ImageNet</span> y entre otros proyectos bastantes interesantes.
                    </p>
                    <img class="section__img" src="img/openai.jpg" alt="image-ai-info">
                </div>

                <div class="section"> 
                    <h2 class="section__title">Automoviles autonomos</h2>
                    <img class="section__img" src="img/Autonomous-car-761x430.jpg" alt="image-ai-info">
                    <p class="section__paragraph">
                        Los vehículos autónomos, también conocidos como sin conductor,
                        es aquel que es capaz de detectar su entorno y operar sin la colaboración humana. Por lo cual no requiere la participación de un pasajero humano
                        tome el control del mismo. Dandole la capacidad tal que el vehículo puede ir de un lugar a otro
                        y realizar una serie de maniobras como si fuese un conductor humano.
                        <br> <br>
                    </p>
                </div>

                <div class="section"> 
                    <h2 class="section__title">El campo del Deep Learning</h2>
                    <p class="section__paragraph">
                        El <span class="bold">Deep Learning</span> o <span class="bold">Aprendizaje profundo</span> es un <span class="bold">conjunto de algoritmos de aprendizaje automático </span> que intenta modelar abstracciones de alto nivel 
                        en datos usando arquitecturas computacionales que admiten transformaciones no lineales múltiples e iterativas de datos expresados en forma matricial 
                        o tensorial.
                        <br><br>
                        El Deep Learning ha llamado mucho la atención por su potencial utilidad en distintos tipos de aplicaciones en el <span class="bold">“mundo real”</span> (pueden <span class="bold">aplicarse con éxito a grandes volúmenes de datos</span>  
                        para el descubrimiento y aplicación de conocimiento.
                    </p>
                    <img class="section__img" src="img/imagen.jpg" alt="image-ai-info">
                </div>
            </div>
        </main>
        
        
        <!-- Footer  -->
        <?php
        include_once './php/footer.php' 
        ?>



    </div>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
</body>
</html>