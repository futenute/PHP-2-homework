<?php
const SERVER = "localhost";
const DB = "mvc_lesson5";
const LOGIN = "root";
const PASS = "";

global $connect;
$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка при коннекте к базе данных");