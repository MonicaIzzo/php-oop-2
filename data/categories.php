<?php
include_once __DIR__ . '/../Models/Category.php';

$categories = [
    'dog' => new Category('Cane', 'fa-solid fa-dog'),
    'cat' => new Category('Gatto', 'fa-solid fa-cat'),
    'bird' => new Category('Uccello', 'fa-solid fa-kiwi-bird'),
    'fish' => new Category('Pesce', 'fa-fish'),
];
