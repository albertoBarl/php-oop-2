<?php
class Animals extends Products
{
    public $item;

    public function __construct($name, $price, $image, $item)
    {
        parent::__construct($name, $price, $image, $item);
        $this->item = $item;
    }
}
