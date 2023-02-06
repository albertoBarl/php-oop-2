<?php
class Accessories extends Animals
{
    public $material;
    public $sizes;

    public function __construct($name, $price, $image, $item, $material, $sizes)
    {
        parent::__construct($name, $price, $image, $item);

        $this->material = $material;
        $this->sizes = $sizes;
    }
}
