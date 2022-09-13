<?php
require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    private $materials;
    private $color;

    public function __construct($name, $description, $price, $animal_types, $materials, $color)
    {
        parent ::__construct($name, $description, $price, $animal_types);
        $this->setMaterials($materials);
        $this->setColor($color);  
    }

    

    /**
     * Get the value of materials
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     */
    public function setMaterials($materials): self
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }
} 
?> 