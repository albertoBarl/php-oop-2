<?php
class Food extends Animals
{
    public $weight;
    public $ingredients;

    public function __construct($name, $price, $image, $item, $weight, $ingredients)
    {
        parent::__construct($name, $price, $image, $item);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
