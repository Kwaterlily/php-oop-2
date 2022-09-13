<?php
require_once __DIR__ . '/Product.php';

class KannelProduct extends Product
{
    private $height;
    private $width;
    private $color;

    public function __construct($name, $description, $price, $animal_types, $height, $width, $color)
    {
        parent ::__construct($name, $description, $price, $animal_types);
        $this->setHeight($height);
        $this->setWidth($width);
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