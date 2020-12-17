<?php
include_once "PieceProduct.php";
class DigitalProduct extends PieceProduct {
    public function getPrice() {
        return parent::getPrice() / 2;
    }
}