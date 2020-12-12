<?php
include_once "Product.php";
class ProductCard extends Product {
    public function __construct($title, $price, $description, $img)
    {
        parent::__construct($title, $price, $description, $img);
    }

    function show()
    {
        parent::show();
        echo "<br>{$this->img}<br>";
        echo "Полное описание: <br>{$this->description}";
    }

    function feedback($arr) {
        echo "<h3>Отзывы:</h3> <hr>";
        foreach ($arr as $item) {
            echo "$item<hr>";
        }
    }
}

$img = "<img src='img/ficus.jpg' alt='фикус' width='300' height='300'>";
$desc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut";
$fb1 = "consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation";
$fb2 = "adipiscing elit, sed do eiusmod tempor";
$feedbacks = [$fb1, $fb2];

$productCard = new ProductCard("Фикус", "300", "$desc", "$img");
$productCard->show();
$productCard->feedback($feedbacks);
