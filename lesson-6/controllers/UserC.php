<?php
//
// Конттроллер пользователя.
//
class UserC extends BaseC
{
    private $userM;
    public function __construct()
    {
        $this->userM = new UserM();
    }


    public function action_auth(){
        $this->title = 'Войти';
        $this->content = $this->Template('views/auth.tmpl.php');

        if(!empty($_POST)){
            $this->userM->auth($_POST['login'], $_POST['pass']);
        }
    }

    public function action_reg() {
        $this->title = 'Регистрация';
        $this->content = $this->Template('views/reg.tmpl.php');
        if(!empty($_POST)){
            $this->userM->reg($_POST['login'], $_POST['name'], $_POST['pass'], $_POST['phone']);
        }
    }

    public function action_private() {
        $this->title = 'Личный кабинет';
        $this->content = $this->Template('views/private.tmpl.php');
    }

    public function action_logout() {
        $this->userM->logout();
    }
}