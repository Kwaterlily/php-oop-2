<?php
require_once __DIR__ . '/Product.php';

class PetCarriersProduct extends Product
{
    private $height;
    private $width;
    private $length;
    private $material;
    private $color;

    public function __construct($name, $description, $price, $animal_types, $height, $width, $length, $material, $color)
    {
        parent ::__construct($name, $description, $price, $animal_types);
        $this->setHeight($height);
        $this->setWidth($width);  
        $this->setLength($length);  
        $this->setMaterial($material);  
        $this->setColor($color);  
    }

    

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     */
    public function setWidth($width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     */
    public function setLength($length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     */
    public function setMaterial($material): self
    {
        $this->material = $material;

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