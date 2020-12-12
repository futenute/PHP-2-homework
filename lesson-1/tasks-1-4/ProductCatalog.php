<?php
include_once "Product.php";
class ProductCatalog extends Product {

    public function __construct($title, $price, $description, $img)
    {
        $this->img = $img;
        parent::__construct($title, $price, $description, $img);
    }

    function show()
    {
        echo "{$this->img}";
        parent::show();
        echo "Краткое описание: {$this->description}<hr>";
    }
}

$img1 = "<img src='img/ficus.jpg' alt='фикус' width='100' height='100'>";
$img2 = "<img src='img/succulent.jpg' alt='суккуленты' width='100' height='100'>";

$productCatalog1 = new ProductCatalog("Фикус", "300", "Lorem ipsum dolor sit amet, consectetur adipiscing.", "$img1");
$productCatalog2 = new ProductCatalog("Суккуленты", "200", "Lorem ipsum dolor sit amet, consectetur adipiscing.", "$img2");
$productCatalog1->show();
$productCatalog2->show();