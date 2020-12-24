<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('full.html');
    $fullImg = $_GET['img'];
    $content = $template->render([
        'title' => 'Изображение',
        'image'=> $fullImg,
        'back' => $_SERVER['HTTP_REFERER']]);
    echo $content;
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}