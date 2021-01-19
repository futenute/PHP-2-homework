<?php
class AdminM {
    public function admin() {
        return DB::Select('select * from goods');
    }

    public function delete($id) {
        return DB::delete('delete from goods where id=:id_good', [
            'id_good' => $id
        ]);
    }

    public function change($id) {
        $name = $_POST['name'] ? strip_tags($_POST['name']) : "";
        $price = $_POST['price'] ? strip_tags($_POST['price']) : "";
        $shortDesc = $_POST['short_desc'] ? strip_tags($_POST['short_desc']) : "";
        $longDesc = $_POST['long_desc'] ? strip_tags($_POST['long_desc']) : "";
        $id = $_POST['id'] ? strip_tags($_POST['id']) : "";
        $pathSmall = '';
        $pathSmallDB = '';
        $pathBig = '';
        $pathBigDB = '';

        if ($_FILES['small_img']['tmp_name']) {
            $time = time();
            $pathSmall = "data/img/small/".$time.".jpg";
            $pathSmallDB = "small/$time.jpg";
            move_uploaded_file($_FILES['small_img']['tmp_name'], $pathSmall);
        }

        if ($_FILES['big_img']['tmp_name']) {
            $time = time();
            $pathBig = "data/img/big/".$time.".jpg";
            $pathBigDB = "big/$time.jpg";
            move_uploaded_file($_FILES['big_img']['tmp_name'], $pathBig);
        }

        if($id) {
            $updateImgSql = '';
            $params = [
                'name' => $name,
                'price' => $price,
                'short_desc' => $shortDesc,
                'long_desc' => $longDesc,
                'id' => $id
            ];
            if($pathSmallDB) {
                $updateImgSql .= ', small_img=:small_img';
                $params['small_img'] = $pathSmallDB;
            }
            if($pathBigDB) {
                $updateImgSql .= ', big_img=:big_img';
                $params['big_img'] = $pathBigDB;
            }

            return DB::update ("update goods set name=:name, price=:price, short_desc=:short_desc, long_desc=:long_desc $updateImgSql where id=:id", $params);
        } else {
            return DB::insert ("insert into goods (name, price, short_desc, long_desc, small_img, big_img) values (:name, :price, :short_desc, :long_desc, :small_img, :big_img)", [
                'name' => $name,
                'price' => $price,
                'short_desc' => $shortDesc,
                'long_desc' => $longDesc,
                'small_img' => $pathSmallDB,
                'big_img' => $pathBigDB
            ]);
        }

    }
}