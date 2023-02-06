<?php
class Toys extends Animals
{
    public $dimens;
    public $infos;

    public function __construct($name, $price, $image, $item, $dimens, $infos)
    {
        parent::__construct($name, $price, $image, $item);

        $this->dimens = $dimens;
        $this->infos = $infos;
    }
}
