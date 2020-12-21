<?php
abstract class Product{
    const MARKUP = 15;
    abstract function totalPrice();
    abstract function profit();
}