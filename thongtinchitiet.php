<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="color.css">
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <title>Store BlueFACE | Điện thoại , Laptop , Phụ kiện chính
        hãng</title>
    <style>



        @font-face {
            src: url('Lemonada.ttf');
            font-family: fontchu;
        }


        .buy {
            display: inline-block;
            text-align: center;
            overflow: hidden;
            padding: 5px 0;
            width: 150px;
            margin: 0 0;
            cursor: pointer;
            font-size: 12px;
            color: #f76b1c;
            text-transform: uppercase;
            border: 1px solid #f76b1c;
            border-radius: 3px;
            background: #fff;
            transition: all .3s ease;
        }

        .buy:hover {
            background: red;
            color: white;
        }

        .mua {
            display: inline-block;
            text-align: center;
            overflow: hidden;
            padding: 5px 0;
            width: 150px;
            margin: 0 0;
            cursor: pointer;
            font-size: 12px;
            color: #f76b1c;
            text-transform: uppercase;
            border: 1px solid #f76b1c;
            border-radius: 3px;
            background: #fff;
            transition: all .3s ease;
            hover:
        }

        .newall {
            text-decoration: none;
        }

        .news > div > img {
            width: 90%;
            height: auto;
        }

        .item {
            border-right: 1px solid silver;
        }

        .item:last-child {
            border-right: 0;
        }

        .item > div {
            padding: 10px;
        }

        .item > div > img {
            width: 90%;
            height: auto;
        }

        body {
            padding-top: 80px;
            background: white;
        }

        @media only screen and (max-width: 1024px) {

            body {
                padding-top: 170px;
            }
        }

        .st > li a {
            background: NONE !important;
        }

        @media screen and (max-width: 768px) {
            .st > li {
                border-bottom: 1px solid black;
            }

            .st {
                margin-left: 0 !important;
            }
        }

        #myan > ul > li:hover > a {
            color: red;
        }

    </style>
</head>
<body ng-app="myapp" ng-controller="hien">
<nav class="navbar  navbar-fixed-top"
     style="border-radius: 0; background: #42dff4">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="trangchu.html"> <img style="margin: 0"
                                                               alt="Home" src="images/logo2.png" width="170"
                                                               height="60">
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
                        <li ng-repeat="item in dm.dts"><a
                                    href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>

                    </ul>
                </li>
                <li class="dropdown text-center" style="margin-top: 2px"><a
                            class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class=""><img alt="laptop" src="images/laptop1.png"></span><br>Laptop</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.laps"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tainghe" src="images/tainghe.png"></span><br>Phụ kiện</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.pks"><a
                                    href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>
                    </ul>
                </li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tablet" src="images/tablet.png"></span><br>Tablet</a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="item in dm.tablets"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="sim.php"><span class=""><img
                                    alt="sim the" src="images/sim.png"></span><br>Sim thẻ</a>
                    <ul class="dropdown-menu">
                        <li><a href="sim.php">Sim</a></li>
                    </ul>
                </li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="doitra" src="images/maydoitra.png"></span><br>Máy đổi
                        trả</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li class="dropdown text-center"><a class="dropdown-toggle"
                                                    data-toggle="dropdown" href="#"><span class=""><img
                                    alt="tintuc" src="images/sale.png"></span><br>Tin tức</a>
                    <ul class="dropdown-menu">
                        <li><a href="tintuc.php">Tin công nghệ</a></li>
                    </ul></li>
            </ul>


            <ul style="margin-top: 20px" class="st nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
                <li><a href="dangky.php"><span class="glyphicon glyphicon-plus"></span>
                        Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h2 style="font-family: fontchu">{{gtt.tenphone}}</h2>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img alt="t" src="images/{{gtt.hinhphone}}" style="width: 80% ">
            </div>
            <div style="font-size: 30px; font-family: fontchu; color: red">
                <b>{{dinhdang(gtt.giaphone)}}</b><span style="color: silver">đ</span>
            </div>
            <div>
                <button class="buy">Mua ngay</button>
            </div>
            <hr>
            <div class="col-sm-6">
                <h3 style="text-align: center">Thông số kỹ thuật</h3>
                <hr>
                <div class="detail">

                    <div ng-repeat="item in gtt.ttr">
                        <div>
                            <div class="col-md-4">{{item.tenthuoctinh}}:</div>
                            <div class="col-md-6"> {{item.giatri}}</div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                    </div>

                </div>
                <style>
                    .detail p {

                    }
                </style>
            </div>
        </div>
    </div>
</div>
<script>
    var app = angular.module('myapp', []);
    app.controller('hien', function ($scope, $http) {
        $http.get("danhmuc.php"
        ).then(function (data) {
            $scope.dm = data.data;
        });
        $http.get("gettop.php").then(function (data) {
            $scope.gt = data.data;
        });
        $scope.dinhdang = function (money) {
            if (money == 0) {
                return 0;
            }
            return money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        };
        $http.get("gettt.php", {params: {id:    <?php echo $_GET["id"]?> }}).then(function (data) {
            $scope.gtt = data.data;
        });
    });
</script>
</body>
</html>	