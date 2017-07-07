<?php

function checkLimit($id, $ids)
{
    foreach ($ids as $key => $vl) {
        if ($id == $vl['Maloai'])
            return true;
    }
    return false;
}

include 'connect.php';
$id = $_GET["id"];
$sp = "SELECT * FROM `sanpham` where id=$id";
$d = $db->query($sp);
$product = $d->fetch(PDO::FETCH_ASSOC);

$ltb = $db->query("SELECT LoaiThietBi FROM `loaisanpham` WHERE Maloai = " . $product['Loaihang'])->fetch(PDO::FETCH_ASSOC)['LoaiThietBi'];
if ($ltb != 3) {
//DT
    if ($ltb == 0) {
        $ml = 1;
    } else if ($ltb == 1) {
        $ml = 9;
    }else if ($ltb == 2) {
        $ml = 14;
    }

    $product['ttr'] = $db->query('select * FROM thuoctinhthietbi where maloai = ' . $ml)->fetchAll(PDO::FETCH_ASSOC);
} else {

    $product['ttr'] = $db->query('select * FROM thuoctinhthietbi where maloai = ' . $product['Loaihang'])->fetchAll(PDO::FETCH_ASSOC);

}
foreach ($product['ttr'] as $key => $vl) {
    $product['ttr'][$key]['giatri'] = $product[$vl['mathuoctinh']];
}
echo json_encode($product);

/*echo '<pre>';
print_r($product);
echo '</pre>';*/

