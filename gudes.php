<?php require 'templates/header.php' ?>
<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    <title>Wuwa-LB</title>
</head>

<body style="background-image: url(img/Airbrush-IMAGE-ENHANCER-1770281097412-1770281097412.jpg);
            background-size: cover;
            background-attachment: fixed;">


    <div class="main">
        <div class="card-container">



            <div class="glass-container">


                <div class="content-block">
                    <p>На этой странице мы собрали актуальные гайды на персонажей, которые, на наш взгляд, будут полезны для игроков. Эти руководства содержат информацию о сильных и слабых сторонах персонажей, эффективных стратегиях использования их способностей, а также советы по прокачке и подбору экипировки.</p>
                </div>

                <div class="gallery-grid"> 

                <?php foreach ($cards as $item): ?>
                    <div class="image-card">
                   
                        <a href="<?= $item['link'] ?>" target="_blank" style="text-decoration: none;">
                            <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>" class="card-image">
                        <div class="card-content">
                            <h2 class="card-title"><?= $item['name'] ?></h2>
                        </div>
                    </a>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>

        </div>
    </div>

    </div>
    </div>


    <?php require 'loader.php'?>
</body>

</html>

<?php require 'templates/footer.php' ?>

