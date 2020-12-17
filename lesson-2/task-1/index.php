<?php
include_once "DigitalProduct.php";
include_once "WeightProduct.php";

$pieceProd = new PieceProduct(1);
$digitalProd = new DigitalProduct(1);
$weightProd = new WeightProduct(110, 3.2);

echo "Штучный товар. Продано: {$pieceProd->getCount()} шт. Общая стоимость: {$pieceProd->totalPrice()}. Прибыль: {$pieceProd->profit()}<hr>";
echo "Цифровой товар. Продано: {$digitalProd->getCount()} шт. Общая стоимость: {$digitalProd->totalPrice()}. Прибыль: {$digitalProd->profit()}<hr>";
echo "Весовой товар. Продано: {$weightProd->getCount()} кг. Общая стоимость: {$weightProd->totalPrice()}. Прибыль: {$weightProd->profit()}<hr>";