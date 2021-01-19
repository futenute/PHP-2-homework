<?php

class AdminC extends BaseC {
    private $adminM;

    public function __construct()
    {
        $this->adminM = new AdminM();
    }

    public function action_admin() {
        $this->title = 'Админка';
        $goods = $this->adminM->admin();
        $this->content = $this->Template('views/admin.tmpl.php', [
            'goods' => $goods
        ]);
    }

    public function action_delete() {
        $this->adminM->delete($_GET['id']);
        header("location:". $_SERVER['HTTP_REFERER']);
    }

    public function action_change() {
        if(!empty($_POST)) {
            $this->adminM->change($_POST['id']);
        }
        header("Location: index.php?c=admin&act=admin");

    }
}