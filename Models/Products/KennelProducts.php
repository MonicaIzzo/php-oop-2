<?php
require_once __DIR__ . '/Product.php';

class KennelProducts extends Products
{
    private $size;
    private $color;
    public static $type = 'kennel';
    public static $icon = 'fas fa-house';

    public function __construct($name, $image, $price, Category $category, $size, $color)
    {
        parent::__costruct($name, $image, $price, $category);

        $this->setSize($size);
        $this->setColor($color);
    }

    // MISURA
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size): self
    {
        $this->size = $size;

        return $this;
    }


    // COLORI
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }
}
