<?php
include_once 'autenticacion.php';
include_once './admin/galeria.php';
$obj_galery = new Galery();
$info_galery = $obj_galery->get_galery();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aroby Rosario">
    <meta name="keywords" content="develop ai, ai, machine learning, inteligencia artificial">
    <link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/galeria.css">
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
                <?php foreach ($info_galery as $galery) { ?>
                    <div class="card">
                        <div class="container">
                            <img src="<?=$galery['url_img']?>" alt="imagen-ai">
                        </div>
                        <div class="details">
                            <h3><?=$galery['title']?></h3>
                            <p>
                                <?=$galery['description']?>
                            </p>
                            <a href="#">Mas informacion ></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
        <?php
        include_once 'php/footer.php';
        ?>
    </div>
</body>

</html>