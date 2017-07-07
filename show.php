<?php
    include 'connect.php';
    $id = $_GET["id"];
    $da = "SELECT * FROM `sanpham` WHERE Loaihang=$id";
    $sh=$db->query($da);
    
    $tb = $sh->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tb);
?>