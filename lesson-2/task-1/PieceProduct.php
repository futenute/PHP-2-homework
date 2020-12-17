<?php
include_once "Product.php";
class PieceProduct extends Product{
    const PRICE = 998;
    private $count;

    public function __construct($count){
        $this->count = $count;
    }

    public function getCount(){
        return $this->count;
    }

    public function getPrice(){
        return self::PRICE;
    }

    public function totalPrice(){
        return round ($this->count * $this::getPrice(), 2);
    }

    public function profit() {
        return self::totalPrice() / 100 * self::MARKUP;
    }
}