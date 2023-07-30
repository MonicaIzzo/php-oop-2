<?php

require_once __DIR__ . '/../Category.php';

class Products
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $category;


    public function __costruct($name, $image, $price, Category $category)
    {
        $this->setId();
        $this->setName($name);
        $this->setImage($image);
        $this->setPrice($price);
        $this->setCategory($category);
    }


    // id

    public function getId()
    {
        return $this->id;
    }

    private function setId()
    {
        $this->id = uniqid();
    }

    // name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }



    // image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;
        return $this;
    }


    // Prince
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }


    // Category
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        if ($category instanceof Category) $this->category = $category;
    }
}
