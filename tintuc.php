<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <title>Store BlueFACE | Điện thoại , Laptop , Phụ kiện chính
        hãng</title>
<style>
    .news p{
        word-break: break-all;
    }
    .td {
        word-break: break-all;
    }
    .hinh {
        /*width: 320px;height: 200px;
        margin-top: 140px;*/
        float: left;position: relative;
        width: 250px;
        height: 140px;
        /*margin-left: 25px;*/
    /*}*/
    }
    .timeline {
        position: absolute;
    }

</style>

</head>

<body ng-app="myapp" ng-controller="hien">
<nav class="navbar  navbar-fixed-top"
     style="border-radius: 0; background: white;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="trangchu.html"> <img style="margin: 0"
                                                               alt="Home" src="images/logo2.png" width="170" height="60">
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

<hr style="margin-top: 80px">
<div class="container" >
    <!-- Left-aligned media object -->
    <div class="news" style="margin-top: 40px" ng-repeat="item in tt">
        <div class="col-sm-4">
            <img src="images/{{item.hinh}}" class="hinh" style="width: 300px ; height: 170px">
        </div>
        <div class="col-sm-8">
            <div class="col-sm-10">
                <h3 class="td media-heading">{{item.tieude}}</h3>
                <p>{{item.noidung}}</p>
                <p class="timeline pull-right"><i>{{item.timeline}}</i></p>
            </div>
            <div class="col-sm-2">
                <span class="pull-right"><b style="color: red">{{item.tenloai}}</b></span>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>

</div>

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
        $scope.dinhdang = function(money){
            if (money == 0) {
                return 0;
            }
            return money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                ;
        };
        $http.get("getinfo.php").then(function (data) {
            $scope.tt=data.data;
        });
    });

</script>
</body>
</html>