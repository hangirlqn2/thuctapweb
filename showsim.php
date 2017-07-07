<?php
    include 'connect.php';
    $id=$_GET["id"];
    
    if($id == '-1'){
        $se = "SELECT s.*,ls.ten,sh.ten as tyn FROM `loaisim` ls,sim s,simhot sh WHERE s.loaisim =ls.masim and sh.id=s.idynghiasim";
    }else {
    $se = "SELECT s.*,ls.ten,sh.ten as tyn FROM `loaisim` ls,sim s,simhot sh WHERE s.loaisim =ls.masim and sh.id=s.idynghiasim and s.idynghiasim=$id";
 
    }
    $duyet = $db->query($se);
    $tb = $duyet->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tb);