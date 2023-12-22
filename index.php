<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Alumni Afpa</title>
</head>

<body>

    <?php
    include("./components/headerNavbar.php");
    ?>

    <?php

    include('./assets/data/data.php');

    $images = [
        "./assets/img/portrait-1.jpg",
        "./assets/img/portrait-2.jpg",
        "./assets/img/portrait-3.jpg",
        "./assets/img/portrait-4.jpg",
        "./assets/img/portrait-5.jpg",
        "./assets/img/portrait-6.jpg",
        "./assets/img/portrait-7.jpg",
        "./assets/img/portrait-8.jpg",
        "./assets/img/portrait-9.jpg",
        "./assets/img/portrait-10.jpg",
        "./assets/img/portrait-11.jpg",
        "./assets/img/portrait-12.jpg",
        "./assets/img/portrait-13.jpg",
        "./assets/img/portrait-14.jpg",
        "./assets/img/portrait-15.jpg",
        "./assets/img/portrait-16.jpg",
        "./assets/img/portrait-17.jpg",
        "./assets/img/portrait-18.jpg",
        "./assets/img/portrait-19.jpg",
        "./assets/img/portrait-20.jpg",
    ];

    $imageIndex = 0;
    ?>


    <?php
    $path_to_data = './assets/data/data.php';
    include($path_to_data);
    ?>


    <div class="boucleAlumni">
        <?php foreach ($data as $person): ?>
            <div class="carteAlumni">
                <h3>
                    <?= $person['name'] ?>
                </h3>
                <img src="<?= $images[$imageIndex] ?>" alt="Portrait">
                <p>Numéro de téléphone :
                    <?= $person['phone'] ?>
                </p>
                <p>Email:
                    <?= $person['email'] ?>
                </p>
                <p>Region:
                    <?= $person['region'] ?>
                </p>
            </div>
            <?php
            $imageIndex = ($imageIndex + 1) % count($images);

            ?>
        <?php endforeach; ?>
    </div>






</body>

</html>