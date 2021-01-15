<?php
abstract class BaseC extends ControllerC {
    protected $title; // заголовок страницы
    protected $content; // содержание страницы

    protected function before(){

        $this->title = 'Ficusland';
        $this->content = '';
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
        $page = $this->Template('views/main.tmpl.php', $vars);
        echo $page;
    }
}