<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập vào hệ thống | Blue Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <style>
        body {
            background: black;
        }
    </style>

    <script>
        $(function () {
            $("#tendangnhap").blur(function () {
                var u = $(this).val();
                $.get("checkUsername.php",{un:u},function (data) {
                    if(data==0) {
                        $("#nhacLoiUn").html("<b style='font-size: 20px'>Tên đăng nhập không tồn tại !</b>");
                        $("#nhacLoiUn").css("color","red");
                    }else {
                        $("#nhacLoiUn").html("<b>Tên đăng nhập hợp lệ</b>");
                        $("#nhacLoiUn").css("color","green");
                    }
                });
            });
        });
    </script>
</head>
<body ng-app="myapp" ng-controller="hien">
<nav class="navbar  navbar-fixed-top"
     style="border-radius: 0; background: black;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="trangchu.html"> <img style="margin: 0" alt="Home" src="images/logo2.png" width="170" height="60">
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myan">
					<span style="font-size: 25px"
                          class="glyphicon glyphicon-menu-hamburger"></span>
            </button>

        </div>
        <form style="margin-top: 20px" class="navbar-form  navbar-left">
            <div class="input-group">
                <input type="text" class="form-control"
                       placeholder="Bạn muốn tìm gì?">
                <div class="input-group-btn">
                    <button style="background: #B6292B; color: white;"
                            class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="collapse navbar-collapse" id="myan">
            <ul class="st nav navbar-nav " style="margin-left: 60px">
                <li class="dropdown text-center" style="margin-top: -3px"><a
                            class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class=""><img alt="phone" src="images/dt.png"></span><br>Điện
                        thoại</a>
                    <ul class="dropdown-menu ds">
                        <li ng-repeat="item in dm.dts"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>

                    </ul></li>
                <li class="dropdown text-center" style="margin-top: 2px"><a
                            class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class=""><img alt="laptop" src="images/laptop1.png"></span><br>Laptop</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.laps"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>

                    </ul></li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tainghe" src="images/tainghe.png"></span><br>Phụ kiện</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.pks"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>
                    </ul></li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tablet" src="images/tablet.png"></span><br>Tablet</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.tablets"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>
                    </ul></li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="sim.php"><span class=""><img
                                    alt="sim the" src="images/sim.png"></span><br>Sim thẻ</a>
                    <ul class="dropdown-menu">
                        <li><a href="sim.php">Sim</a></li>
                    </ul></li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="doitra" src="images/maydoitra.png"></span><br>Máy đổi
                        trả</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul></li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tintuc" src="images/sale.png"></span><br>Tin tức</a>
                    <ul class="dropdown-menu">
                        <li><a href="tintuc.php">Tin công nghệ</a></li>
                    </ul></li>
            </ul>


            <ul style="margin-top: 20px" class="st nav navbar-nav navbar-right">
                <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
                <li><a href="dangky.php"><span class="glyphicon glyphicon-plus"></span>
                        Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<hr style="color: white ; margin-top: 80px">
<div class="container" style=" margin-top: 90px">
    <h1 style="color: white;text-align: center">Đăng nhập</h1>
    <form class="form-horizontal" action="xulylogin.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email" style="color: white">Tên đăng nhập:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tendangnhap" placeholder="Nhập tên đăng nhập.." name="tendangnhap">
                <div id="nhacLoiUn"></div>
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd" style="color: white">Mật khẩu:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass" placeholder="Nhập mật khẩu.." name="pass">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label style="color: white"><input type="checkbox" name="remember" style="color: white"> Nhớ mật khẩu</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button name="btndn" id="btndn" type="submit" class="login btn btn-default pull-right">Login</button>
            </div>
        </div>
    </form>
    <script>
        var app = angular.module('myapp',[]);
        app.controller('hien',function($scope,$http) {
            $http.get("danhmuc.php"
            ).then(function(data) {
                $scope.dm=data.data;
            });
            $http.get("gettop.php").then(function(data) {
                $scope.gt=data.data;
            });

        });
    </script>
</body>
</html>