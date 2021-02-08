<?php
    include_once './autenticacion.php';
    include_once './admin/about.php';
    $obj_about = new About();
    $info = $obj_about->get_about();
?>

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
                <div class="section">
                    <h2 class="title title--conctact">Nosotros</h2>
                </div>
                <?php foreach($info as $about) { ?>
                    <div class="about__section section">
                        <p class="section__paragraph">
                            <?=$about['description']?>                      
                        </p>
                        <img src="<?=$about['url_img']?>" alt="img-about" class="section__img--about section__img">
                    </div>    
                <?php } ?>
        </main>
        <!-- Footer -->
        <?php
        include_once 'php/footer.php';
        ?>
    </div>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./main.js"></script>
</body>
</html>