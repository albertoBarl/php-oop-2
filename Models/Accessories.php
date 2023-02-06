<?php
class Accessories extends Animals
{
    public $material;
    public $sizes;

    public function __construct($name, $price, $image, $type, $item, $material, $sizes)
    {
        parent::__construct($name, $price, $image, $type, $item);

        $this->material = $material;
        $this->sizes = $sizes;
    }
}
