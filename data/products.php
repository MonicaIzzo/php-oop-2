<?php
// Classi prodotti
include_once __DIR__ . '/../Models/Products/ToyProducts.php';
include_once __DIR__ . '/../Models/Products/FoodProducts.php';
include_once __DIR__ . '/../Models/Products/KennelProducts.php';

// Importo le categorie disponibili
include_once __DIR__ . '/categories.php';


$products = [

    // FOOD
    new FoodProducts(
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',
        43.99,
        $categories['dog'],
        ['prosciutto', 'riso'],
        '2024-10-12'
    ),
    new FoodProducts(
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        44.5,
        $categories['dog'],
        ['manzo', 'cereali'],
        '2024-10-12'
    ),
    new FoodProducts(
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        34.898,
        $categories['cat'],
        ['tonno', 'pollo', 'prosciutto'],
        '2024-10-12'
    ),
    new FoodProducts(
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        2.95,
        $categories['fish'],
        ['molluschi', 'alghe'],
        '2024-10-12'
    ),

    // KENNEL

    new KennelProducts(
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        189.99,
        $categories['bird'],
        '83cm x 67cm . 153cm',
        'wooden-brown'
    ),
    new KennelProducts(
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        23.66,
        $categories['fish'],
        ['filtraggio meccanico', 'filtraggio biologico', 'filtraggio chimico:'],
        'plastic'
    ),

    // TOYS
    new ToyProducts(
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        13.49,
        $categories['dog'],
        ['gomma', 'plastica'],
        'rosso'
    ),
    new ToyProducts(
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
        4.99,
        $categories['cat'],
        ['peluche', 'plastica'],
        'grigio'
    ),
];
