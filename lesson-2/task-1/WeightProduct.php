<?php
include_once "Product.php";
class WeightProduct extends Product{
    private $price;
    private $count;

    public function __construct($price, $count)
    {
        $this->price = $price;
        $this->count = (float)$count;
    }

    public function getCount(){
        return $this->count;
    }

    public function totalPrice(){
        return $this->price * $this->count;
    }

    public function profit(){
        return self::totalPrice() / 100 * self::MARKUP;
    }

}