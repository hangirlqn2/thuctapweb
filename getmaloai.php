<?php
include 'connect.php';
if(!isset($_GET["loai"])) {
    $loaithietbi = "";
}else
$loaithietbi = $_GET["loai"];

if(!isset($_GET["ml"])) {
    $if = 0;
}else
    $if = $_GET["ml"];


if($if==0) {
    $ll = "SELECT * FROM `loaisanpham` WHERE LoaiThietBi=$loaithietbi";

}
else {
    $ll = "SELECT * FROM `loaisanpham` WHERE LoaiThietBi = ( SELECT LoaiThietBi FROM loaisanpham WHERE Maloai = $loaithietbi )";

}
$qr=$db->query($ll);
$rs=$qr->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rs);
