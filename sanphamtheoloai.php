<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<title>Store BlueFACE | Điện thoại , Laptop , Phụ kiện chính
	hãng</title>
<style>
    @font-face {
        src:url('Lemonada.ttf');
        font-family: fontchu;
    }

    .mua:hover {
        text-shadow: 0 1px 0 #666, 0 2px 0 #555, 1px 3px 0 #444, 2px 4px 0 #333, 3px 5px 0 #222, 4px 6px 1px #111, 0 0 5px rgba(0,0,0,.6), 0 1px 3px rgba(0,0,0,.5), 1px 3px 5px rgba(0,0,0,.4), 3px 5px 10px rgba(0,0,0,.3), 5px 10px 10px rgba(0,0,0,.2), 10px 20px 20px rgba(0,0,0,.1);
    }
    .mua {
        -webkit-transition: all 0.7s ease; transition: all 0.7s ease;
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

}
.mua:hover {
    background: dodgerblue;
    color: white;
}
.item>div {
	padding:10px;
	height: 250px;
}
.equal {
  display: flex;
  display: -webkit-flex;
  flex-wrap: wrap;
}
.news>div>img {
	width: 90%;
	height: auto;
}

.item {
	 border-right: 1px solid silver; 
	 border-bottom: 1px solid silver;
}


.item>div>img {
	width: 90%;
	height: auto;
}

body {
	padding-top: 80px;
	background: white;
}
@media only screen and (max-width:1024px){
	
	body {
	padding-top: 170px;
}
}

.st>li a {
	background: NONE !important;
}

@media  screen and (max-width:768px) {
	.st>li {
		border-bottom: 1px solid black;
	}
	.st {
		margin-left: 0 !important;
	}
}
#myan >ul>li:hover > a{
	color: red;
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
						<ul class="dropdown-menu">
							<li ng-repeat="item in dm.dts"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>
						</ul>
						</li>
						
					<li class="dropdown text-center" style="margin-top: 2px"><a
						class="dropdown-toggle" data-toggle="dropdown" href="#"><span
							class=""><img alt="laptop" src="images/laptop1.png"></span><br>Laptop</a>
						<ul class="dropdown-menu">
							<li ng-repeat="item in dm.laps"><a href="sanphamtheoloai.php?id={{item.Maloai}}">{{item.Tenloai}}</a></li>
							
						</ul></li>
					<li class="dropdown text-center"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"><span class=""><img
								alt="phukien" src="images/tainghe.png"></span><br>Phụ kiện</a>
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
						data-toggle="dropdown" href="#"><span class=""><img
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
	<div style="width: 90%; margin: 0 auto">
		<div class="panel panel-default" style="padding: 0">
			<div class="panel-heading" style="background: #4abbf1">
				 
			</div>
			<div class="panel-body equal" style="padding: 0">
				<div class="col-sm-2 item" ng-repeat="item in items" style="font-family: fontchu">
					<div style="height: 290px;position: relative">
						<img alt="top1" src="images/{{item.hinhphone}}">

						<div>
							<p style="font-size: 12px ; margin-top: 23px" ><b>{{item.tenphone}}</b></p>
						</div>
						
						<div style="position: absolute;bottom:5px;">
							<span style="color: red; font-size: 15px"><b>{{dinhdang(item.giaphone)}}</b></span>
							<span style="color: silver">đ</span>
							<br>
                            <a class="xem" href="thongtinchitiet.php?id={{item.id}}"> <button class=" mua pull-right" style="margin-bottom: 2px"><b>Xem thêm</b></button></a>
						</div>
					</div>
				</div>
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