<?php
    include 'connect.php';
    
    $dts = $db->query("SELECT * FROM `loaisanpham` WHERE LoaiThietBi=0");
    $laps = $db->query("SELECT * FROM `loaisanpham` WHERE LoaiThietBi=1");
    $tablets = $db->query("SELECT * FROM `loaisanpham` WHERE LoaiThietBi=2");
    $pks = $db->query("SELECT * FROM `loaisanpham` WHERE LoaiThietBi=3");
    
    $dm = array("dts"=>($dts->fetchAll(PDO::FETCH_ASSOC)),"laps"=>($laps->fetchAll(PDO::FETCH_ASSOC)),"tablets"=>($tablets->fetchAll(PDO::FETCH_ASSOC)),"pks"=>($pks->fetchAll(PDO::FETCH_ASSOC)));
    echo json_encode($dm);
?>