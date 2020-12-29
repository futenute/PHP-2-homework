<?php

const SERVER = "localhost";
const DB = "shop";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка при коннекте к базе данных");

