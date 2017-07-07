<?php
    include 'connect.php';
    $mobi = $db->query("SELECT * FROM `sim` WHERE loaisim=0");
    $viettel = $db->query("SELECT * FROM `sim` WHERE loaisim=1");
    $vina = $db->query("SELECT * FROM `sim` WHERE loaisim=2");
    
    $dms = array("mobi"=>($mobi->fetchAll(PDO::FETCH_ASSOC)),"viettel"=>($viettel->fetchAll(PDO::FETCH_ASSOC)),"vina"=>($vina->fetchAll(PDO::FETCH_ASSOC)));
    echo json_encode($dms);