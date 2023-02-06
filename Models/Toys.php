<?php
class Toys extends Animals
{
    public $sizes;
    public $infos;

    public function __construct($name, $price, $image, $item, $sizes, $infos)
    {
        parent::__construct($name, $price, $image, $item);

        $this->sizes = $sizes;
        $this->infos = $infos;
    }
}
