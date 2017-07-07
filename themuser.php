<?php


    if(isset($_POST['btndk'])) {
        include 'connect.php';
        $addtk = $_POST["tendangnhap"];
        $addmk = $_POST["pass"];

        if (empty($addtk)) {
            'Chưa nhập tên đăng nhập !';///thong bao
            exit();//dung trang web lai , eo cho chay lenh them vao sql
        }

        if (empty($addmk)) {
            echo 'Chưa nhập mật khẩu !';
            exit();
        }
        if($addtk || $addmk ==0) {
            header('Location:dangky.php');
        }
        $addmk=md5($addmk);
        $them = "INSERT INTO `user`(`id`, `tendangnhap`, `matkhau`) VALUES (NULL ,'$addtk','$addmk')";
        $num = $db->exec($them);
        if ($num <= 0) {
            echo 'Thất bại';
        }
        else {
            header('Location:admin.php');
        }

    }