<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aroby Rosario">
    <meta name="keywords" content="develop ai, ai, machine learning, inteligencia artificial">
    <link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/galeria.css">
    <title>Develop AI | Galeria</title>
</head>
<body>
    
    <div class="grid-container">
        <!-- Nav -->
        <?php 
        include_once './php/nav.php';
        ?>
        <main class="main__container">
            <h1 class="title">Galeria de recursos</h1>

            <div class="container__cards">
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/auto.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>Los niveles de conducion autonoma</h3>
                        <p>
                            La NHTSA (Administración Nacional de Seguridad del Tráfico ) creó una escala con cinco niveles de automatización, de 0 a 4, 
                            focalizándose principalmente en las capacidades del vehículo de conducirse por sí mismo.
                            Aqui te explicamos porque estamos todavia muy lejos de conseguir un automovil 100% autonomo segun esta escala. 
                        </p>
                        <a href="#">Mas informacion ></a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/openai2.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>Por qué GPT-3, el nuevo modelo de lenguaje de OpenAI, es tan impresionante</h3>
                        <p>
                            GPT-3 es el modelo de lenguaje más poderoso creado hasta ahora. Es decir, una inteligencia artificial, 
                            un modelo de machine learning que analiza texto o datos para ofrecer predicciones de palabras en función de todas las palabras anteriores.
                            Es lo que se usa en aplicaciones de procesamiento natural del lenguaje o PNL.
                        </p>
                        <a href="">Mas informacion ></a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/code3.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>El futuro de las imagines? Pix2Pix</h3>
                        <p>
                            Pix2Pix es una arquitectura de traducción de imagen a imagen condicional que utiliza un objetivo GAN condicional 
                            combinado con una pérdida de reconstrucción. El objetivo de GAN condicional para las imágenes observadas x, 
                            las imágenes de salida y y el vector de ruido aleatorio z
                        </p>
                        <a href="#">Mas informacion ></a>

                    </div>
                </div>
                
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/machine.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>Aprendizaje automático</h3>
                        <p>
                            El aprendizaje automático es un tipo de inteligencia artificial (AI) que proporciona a las computadoras la capacidad de aprender, 
                            sin ser programadas explícitamente. El aprendizaje automático se centra en el desarrollo de programas informáticos que pueden cambiar 
                            cuando se exponen a nuevos datos.
                        </p>
                        <a href="#">Mas informacion ></a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/machineLearning3.png" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>El futuro de Machine Learning</h3>
                        <p>
                            La evolución de esta tecnología aporta una gran innovación en distintas áreas y servicios que se ofrecen actualmente. 
                            Actualmente, encontramos Machine Learning en distintos ámbitos y que aportan una inmensidad a la humanidad.
                        </p>
                        <a href="#">Mas informacion ></a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/deep.png" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>Cual es la diferencia entre Deep Learning y Machine Learning</h3>
                        <p>
                            El Deep Learning es una subclase de algoritmos de Machine Learning cuya peculiaridad es un mayor nivel de complejidad. 
                            Entonces, Deep Learning pertenece al Machine Learning y no son conceptos absolutamente opuestos. 
                            Nos referimos al aprendizaje superficial a aquellas técnicas de aprendizaje automático que no son profundas.
                        </p>
                        <a href="#">Mas informacion ></a>
                    </div>
                </div>

                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/tesla.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3> El piloto automatico de Tesla </h3>
                        <p>
                        Las características avanzadas de seguridad y comodidad del Piloto automático se han diseñado para ayudarle con las partes más agotadoras de la conducción. El Piloto automático introduce nuevas funciones y mejora la funcionalidad existente para hacer que su Tesla sea más seguro y versátil con el paso del tiempo.
                        </p>

                        <a href="#">Mas informacion ></a>
                    </div>
                </div>

                <div class="card">
                    <div class="container">
                        <img src="../img/galeria/robot2.jpg" alt="imagen-ai">
                    </div>
                    <div class="details">
                        <h3>Un robot en China debutó como conductor de noticias</h3>
                        <p>
                            La agencia Xinhua añadió que el conductor virtual es ya un miembro de su equipo que puede trabajar las 24 horas en su sitio en internet
                             y otras plataformas electrónicas, con reducción de costos de producción y mejora en la eficiencia.                        
                        </p>
                        <a href="#">Mas informacion ></a>
                    </div>
                </div>
            
            
            </div>
        </main>
        <?php
        include_once 'php/footer.php';
        ?>
    </div>
</body>
</html>