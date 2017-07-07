<?php
include 'connect.php';
$g = "SELECT * FROM `sanpham` ORDER BY luotmua DESC limit 0 ,6";
$tb = $db->query($g);
$p = $tb->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($p);