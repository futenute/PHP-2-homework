<?php
class Product {
    public $title;
    public $price;
    public $description;
    public $img;

    function __construct($title, $price, $description, $img) {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
    }

    function show() {
        echo "{$this->title}. Цена: {$this->price} &#8381. ";
    }

    function addToCart() {
        echo "{$this->title} добавлен в корзину";
    }
}