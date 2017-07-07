<?php
    include 'connect.php';
    //$id = $_GET["id"];
    $tt="SELECT tintuc.*,loaitin.tenloai FROM `tintuc`,loaitin WHERE tintuc.loaitin = loaitin.id ";
    $d=$db->query($tt);
    $product = $d->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($product);
