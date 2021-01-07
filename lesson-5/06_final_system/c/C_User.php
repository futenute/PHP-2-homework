<?php
//
// Конттроллер пользователя.
//
spl_autoload_register(function ($classname){
    include_once "c/$classname.php";
});

class C_User extends C_Base
{
    //
    // Конструктор.
    //

    public function action_auth(){
        $this->title .= ': Авторизация';
        $this->content = $this->Template('v/v_auth.php');

        if(!empty($_POST)){
            $user = new M_User();
            $user->auth($_POST['login'], $_POST['pass']);
        }
    }

    public function action_reg() {
        $this->title .= ': Регистрация';
        $this->content = $this->Template('v/v_reg.php');
        if(!empty($_POST)){
            $user = new M_User();
            $user->reg($_POST['login'], $_POST['name'], $_POST['pass']);
        }
    }

    public function action_private() {
        $this->title .= ': Личный кабинет';
        $this->content = $this->Template('v/v_private.php');
    }

    public function action_logout() {
        $user = new M_User();
        $user->logout();
    }
}