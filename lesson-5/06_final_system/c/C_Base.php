<?php
//
// Базовый контроллер сайта.
//
abstract class C_Base extends C_Controller
{
    protected $title; // заголовок страницы
    protected $content; // содержание страницы
    protected $keyWords;

    protected function before(){

        $this->title = 'Сайт';
        $this->content = '';
        $this->keyWords = "...";
    }

    //
    // Генерация базового шаблона
    //
    public function render()
    {
        $vars = [
            'title' => $this->title,
            'content' => $this->content,
            'keywords' => $this->keyWords
        ];
        $page = $this->Template('v/v_main.php', $vars);
        echo $page;
    }
}