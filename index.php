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
$food_products = array_filter($products, fn ($product) => $product::$type === 'food');
$toy_products = array_filter($products, fn ($product) => $product::$type === 'toy');
$kennel_products = array_filter($products, fn ($product) => $product::$type === 'kennel');

?>

<!DOCTYPE html>
<html lang="en">

<body>

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
    <header>
        <div class="bg-light">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Pet Shop</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- FOOD-->
            <section id="food" class="my-4">
                <h2>Food <i class="<?= FoodProducts::$icon ?>"></i></h2>
                <div class="row row-cols-4">
                    <!-- card -->
                    <?php foreach ($food_products as $product) : ?>
                        <div class="col">
                            <?php include __DIR__ . '/includes/templates/cards/food_card.php' ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <!-- TOY -->
            <section id="toy" class="my-4">
                <h2>Toy <i class="<?= ToyProducts::$icon ?>"></i></h2>
                <div class="row row-cols-4">
                    <!-- card -->
                    <?php foreach ($toy_products as $product) : ?>
                        <div class="col">
                            <?php include __DIR__ . '/includes/templates/cards/toy_card.php' ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <!-- KENNEL -->
            <section id="kennel" class="my-4">
                <h2>Kennel <i class="<?= KennelProducts::$icon ?>"></i></h2>
                <div class="row row-cols-4">
                    <!-- card -->
                    <?php foreach ($kennel_products as $product) : ?>
                        <div class="col">
                            <?php include __DIR__ . '/includes/templates/cards/kennel_card.php' ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>







            <!--    <?php foreach ($products as $product) : ?>
                <li><?= $product->getName() ?></li>
            <?php endforeach ?> -->
        </div>
    </main>
</body>

</html>