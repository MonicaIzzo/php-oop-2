<!--
esercizio di oggi: Boolshop
nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi e accessori (cucce, guinzagli, lettiere, acquari, etc).
I prodotti possono appartenere a una tra queste categorie:
Cane, Gatto, Uccelli, Pesci
Una volta create le classi che descrivono il nostro sistema, instanziate prima tutte le categorie che ci serviranno, poi create alcuni prodotti di differenti categorie e stampateli nella pagina sotto forma di schede.
-->

<?php
include_once __DIR__ . '/data/products.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Monica Izzo">
    <title>PHP OOP 2</title>

    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">

    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php foreach ($products as $product) : ?>
            <li><?= $product->getName() ?></li>
        <?php endforeach ?>
    </div>
</body>

</html>