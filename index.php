<?php
include_once './admin/posts.php';
$obj_post = new Post();
$all_posts = $obj_post->get_posts();
?>

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
        <!-- Nav -->
        <?php
        include_once './php/nav.php'
        ?>
        <!-- Using method BEM -->
        <main class="main-container">
            <!-- Banner -->
            <?php
            include_once './php/banner.php'
            ?>
            <div class="container__sections">
                <?php foreach($all_posts as $post) { ?>
                    <div class="section">
                    <!-- Block -->
                    <h1 class="section__title"><?=$post['title']?></h1>
                    <p class="section__paragraph">
                        <?=$post['paragraph']?>
                    </p>
                    <img class="section__img" src="<?=$post['url_img']?>" alt="image">
                </div>    
                <?php } ?>
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