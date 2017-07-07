<?php
    include 'connect.php';
    if (isset($_FILES["hinh"]['name']))
        $hinh = $_FILES["hinh"]['name'];
    else
        $hinh = '';
    $tieude=$_POST["tieude"];
    $noidung=$_POST["noidung"];
    $loaitin=$_POST["loai"];
    $tt="INSERT INTO `tintuc`(`id`, `hinh`, `tieude`, `noidung`, `loaitin`) VALUES (NULL ,'$hinh','$tieude','$noidung','$loaitin')";
    $num=$db->exec($tt);
    echo $tt.$num;

copy($_FILES['hinh']['tmp_name'],'./images/'.$_FILES['hinh']['name']);