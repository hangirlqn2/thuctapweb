<?php
if (isset($_POST['btndn'])) {
    include 'connect.php';
    $tk = $_POST["tendangnhap"];
    $mk = $_POST["pass"];
    if ($tk==NULL) {
        echo 'Chưa nhập tên tài khoản !';
        header('Location:dangnhap.php');
    }
    if($mk==NULL) {
        echo 'Chưa nhập mật khẩu !';
        header('Location:dangnhap.php');
    }
    $cb=$db->prepare('select * from user where tendangnhap=:t and matkhau=:p');
    $cb->execute(array(
        ':t'=>$tk,':p'=>md5($mk)
    ));

    $result=$cb->fetchAll(PDO::FETCH_ASSOC);
    if (count($result)>0){
        header('Location:admin.php');
    }  else {
        header('Location:dangnhap.php');
    }
}