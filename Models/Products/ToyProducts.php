<?php
require_once __DIR__ . '/Product.php';

class ToyProducts extends Products
{
    private $color;
    private $materials;
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $color, $materials)
    {
        parent::__costruct($name, $image, $price, $category, $color, $materials);
        $this->setColor($color);
        $this->setMaterials($materials);
    }


    public function listMaterials()
    {
        $materials = implode(',', $this->materials);
        return substr($materials, 0, -1);
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


    // MATERIALI
    public function getMaterials()
    {
        return $this->materials;
    }

    public function setMaterials($materials): self
    {
        $this->materials = $materials;

        return $this;
    }
}
