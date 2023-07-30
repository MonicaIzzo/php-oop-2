<?php
include_once __DIR__ . '/../Models/Category.php';

$categories = [
    'dog' => new Category('Cane', 'fas fa-dog'),
    'cat' => new Category('Gatto', 'fas fa-cat'),
    'bird' => new Category('Uccello', 'fas fa-bird'),
    'fish' => new Category('Pesce', 'fas fa-fish'),
];
