<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('index.html');

    $img = scandir('img');
    array_splice($img, 0, 2);

    $content = $template->render([
        'title' => 'Галерея',
        'images'=> $img]);

    echo $content;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

