<?php
include "../config.php";

if (!$_GET['limit']){
    $limit = 2;
} else {
    $limit = $_GET['limit'];
}

$sql = "select * from goods limit $limit";
$res = mysqli_query($connect, $sql);
$dataGoods = [];
while ($data = mysqli_fetch_assoc($res)){
    $dataGoods[] = $data;
}

$sqlTotalGoods = "select * from goods";
$resTotalGoods = mysqli_query($connect, $sqlTotalGoods);
$totalGoods = mysqli_num_rows($resTotalGoods);

include "../templates/blocks/header.php";
include "../templates/catalog.php";
include "../templates/blocks/footer.php";