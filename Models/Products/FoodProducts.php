<?php
require_once __DIR__ . '/Product.php';

class FoodProducts extends Products
{
    private $ingredients;
    private $expiration;
    public static $type = 'food';
    public static $icon = 'fa-solid fa-utensils';

    public function __construct($name, $image, $price, Category $category, $ingredients, $expiration)
    {
        parent::__costruct($name, $image, $price, $category);

        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    public function listIngredients()
    {
        $ingredients = implode(',', $this->ingredients);
        return substr($ingredients, 0, -1);
    }

    // INGREDIENTI
    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }


    // SCADENZA
    public function getExpiration($string = false)
    {
        if ($string) return date('d-m-Y', $this->expiration);
        return $this->expiration;
    }

    public function setExpiration($expiration): self
    {
        $this->expiration = strtotime($expiration);

        return $this;
    }

    public function isExpired()
    {
        $today = strtotime(date('d-m-Y'));
        return $this->expiration < $today;
    }
}
