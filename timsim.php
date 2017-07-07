<?php
    include 'connect.php';
    $ts = "SELECT * FROM `sim` WHERE ynghiasim='Năm Sinh'";
    $duyet = $db->query($ts);
    $tb=$duyet->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tb);