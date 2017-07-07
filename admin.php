<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</head>

<style>
    body {
        background-image: url("bg.png");
        background-repeat: no-repeat;
    }
</style>

<body>

<div class="container">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Thêm sản phẩm
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="themsanpham.php?loai=0&ml=0">Thêm Điện Thoại</a></li>
            <li><a href="themsanpham.php?loai=1&ml=0">Thêm Laptop</a></li>
            <li><a href="themsanpham.php?loai=2&ml=0">Thêm Tablet</a></li>
            <li><a href="themsanpham.php?loai=18&ml=1">Thêm Chuột</a></li>
            <li><a href="themsanpham.php?loai=19&ml=1">Thêm Tai Nghe</a></li>
            <li><a href="themsanpham.php?loai=20&ml=1">Thêm Cáp Sạc</a></li>
            <li><a href="themsanpham.php?loai=21&ml=1">Thêm Loa</a></li>
        </ul>
    </div>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Thêm tin tức
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="addinfo.php">Loại</a></li>
        </ul>
    </div>
</div>


    <script>
        var app = angular.module ('myapp', []);
        app.controller('hien', function($scope , $http) {
            $http.get("show.php",{params:{id :	<?php echo $_GET["id"]?> }}).then(function(data){

                $scope.items = data.data;

            });
            $scope.dinhdang = function(money){
                if (money == 0) {
                    return 0;
                }
                return money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                    ;
            };
            $http.get("danhmuc.php").then(function(data){
                $scope.dm = data.data;
            });
        });
    </script>
</body>
</html>