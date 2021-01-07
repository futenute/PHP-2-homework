<?php
class CartC extends BaseC {
    private $cartM;

    public function __construct()
    {
        $this->cartM = new CartM();
    }

    public function action_cart() {
        $sessionId = session_id();
        $goodsCount = 0;
        $totalPrice = 0;
        $this->title = 'Корзина';
        $cart = $this->cartM->cart($sessionId);
        for ($i = 0; $i <= count($cart); $i++) {
            $goodsCount += $cart[$i]['count'];
            $totalPrice += $cart[$i]['price'] * $cart[$i]['count'];
        }
        $this->content = $this->Template('views/cart.tmpl.php', [
            'cart' => $cart,
            'goodsCount' => $goodsCount,
            'totalPrice' => $totalPrice
        ]);
    }

    public function action_delete() {
        $this->cartM->delete($_GET['id']);
        header("location:". $_SERVER['HTTP_REFERER']);
    }
}