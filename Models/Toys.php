<?php
class Toys extends Animals
{
    public $specs;
    public $dimens;

    public function __construct($name, $price, $image, $item, $specs, $dimens)
    {
        parent::__construct($name, $price, $image, $item);

        $this->specs = $specs;
        $this->dimens = $dimens;
    }
}
