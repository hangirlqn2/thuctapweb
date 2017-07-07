<?php
/*include'connect.php';
if (isset($_GET["loai"])) {
    $loaitin="";
}else {*/


include 'connect.php';

$ll = "SELECT * FROM `loaitin`";
$qr=$db->query($ll);
$rs=$qr->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rs);