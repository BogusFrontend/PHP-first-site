<?php
$titles = array(
    'Atomic Heart',
    'Valorant',
    'Resident Evil 4',
    'PUBG',
    'Dota 2',
    'CS:GO',
);

$images = array(
    'atomic_heart.jpeg',
    'valorant.jpg',
    'resevil4.jpg',
    'pubg.png',
    'dota2.jpg',
    'csgo.jpg'
);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First PHP web Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-header">

                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <?php
            foreach ($titles as $name) { ?>
                <div class="col-md-6">
                    <div class="main-inner">
                        <div class="row">
                            <div class="col-7">
                                <div class="image">
                                    <img src="./img/posters/atomic_heart.jpeg" alt="atomic heart poster">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="title-inner">
                                    <h4><?php print_r($name); ?></h4>
                                </div>
                                <div class="inner-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, nemo.</p>
                                </div>
                                <div class="inner-link">
                                    <a class="btn btn-primary" href="#">Далее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<footer>

</footer>
</body>
</html>