<?php
class GoodsC extends BaseC {

    private $goodsM;

    public function __construct()
    {
        $this->goodsM = new GoodsM();
    }

    public function action_catalog() {
        $this->title = 'Каталог';
        $goods = $this->goodsM->catalog();
        $this->content = $this->Template('views/catalog.tmpl.php', [
            'goods' => $goods
        ]);
    }

    public function action_item() {
        $item = $this->goodsM->item($_GET['id']);
        $this->title = '';
        $this->content = $this->Template('views/item.tmpl.php', [
            'item' => $item
        ]);
    }

    public function action_toCart() {
        $sessionId = session_id();
        $this->goodsM->toCart($_GET['id'], $sessionId);
        header("location:". $_SERVER['HTTP_REFERER']);
    }
}