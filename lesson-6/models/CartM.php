<?php
class CartM {
    function cart($sessionId) {
        return DB::Select('select cart.id_cart, cart.count, goods.name as name, goods.price as price, goods.small_img as small_img from goods inner join cart on cart.id_good = goods.id where id_session = :id_session', [
            'id_session' => $sessionId
        ]);
    }

    function delete($id) {
        return DB::delete('delete from cart where id_cart=:id_cart', [
            'id_cart' => $id
        ]);
    }
}