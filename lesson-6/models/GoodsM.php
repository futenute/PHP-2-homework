<?php
class GoodsM {

    function catalog() {
        return DB::Select('select * from goods');
    }

    function item($id) {
        return DB::Select('select * from goods where id = :id', [
            'id' => $id
        ]);
    }

    function toCart($id, $sessionId) {
        $count = DB::getRow("select count(*) as 'count' FROM cart WHERE id_session=:id_session and id_good=:id_good", [
            'id_session' => $sessionId,
            'id_good' => $id
        ]);
        if ($count['count'] > 0) {
            return DB::update('update cart set count = count + 1 where id_good=:id_good', [
                'id_good' => $id
            ]);
        } else {
            return DB::insert('insert into cart (id_session, id_good, count) values (:id_session, :id_good, :count)', [
                'id_session' => $sessionId,
                'id_good' => $id,
                'count' => 1
            ]);
        }
    }

}