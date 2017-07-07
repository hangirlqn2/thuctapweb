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
        src: url('Lemonada.ttf');
        font-face-name: fontchu;
    }

    .timsim:hover {
        text-shadow: 0 1px 0 #666, 0 2px 0 #555, 1px 3px 0 #444, 2px 4px 0 #333, 3px 5px 0 #222, 4px 6px 1px #111, 0 0 5px rgba(0,0,0,.6), 0 1px 3px rgba(0,0,0,.5), 1px 3px 5px rgba(0,0,0,.4), 3px 5px 10px rgba(0,0,0,.3), 5px 10px 10px rgba(0,0,0,.2), 10px 20px 20px rgba(0,0,0,.1);
    }
    .timsim {
        -webkit-transition: all 0.7s ease; transition: all 0.7s ease;
    }






.timsim:hover {
    color: black;
    font-family: fontchu;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1031;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.newall {
	text-decoration: none;
}

.news>div>img {
	width: 90%;
	height: auto;
}

.item {
	border-right: 1px solid silver;
}

.item:last-child {
	border-right: 0;
}
.item>div {
	padding:10px;
}
.item>div>img {
	width: 90%;
	height: auto;
}

body {
	padding-top: 80px;
	background: white;
	font-family: "Lato", sans-serif;
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
.mua {
	box-shadow:0 2px 3px 0px black;
	width: 80px;
    border: none !important;
    outline: none !important;
}
.hoversim:hover {
	color: black;
    font-style: italic;
	background: #F9CC76 !important;
}
    .mua:hover {
        border-top-left-radius: 120px; border-bottom-right-radius: 120px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;

    }
    .mua {
        border-bottom-left-radius: 120px; border-top-right-radius: 120px; border-bottom-right-radius: 15px; border-top-left-radius: 15px; -webkit-transition: all 0.7s ease; transition: all 0.7s ease;

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
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/bannersim1.png" alt="b1" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="images/bannersim2.png" alt="b2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/bannersim3.png" alt="b3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	
	<div class="container">
<div id="mySidenav" class="sidenav" style="font-family: fontchu">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="sim.php?id=1">Sim Năm Sinh</a>
  <a href="sim.php?id=2">Siêu Sim</a>
  <a href="sim.php?id=3">Sim Tứ Quý</a>
  <a href="sim.php?id=4">Sim Phát Lộc</a>
</div>
        <button class="timsim form-control" style="font-size: 27px; cursor:pointer ; background: silver;color: white;height: 50px;margin-top: 4px;margin-bottom:4px;" onclick="openNav()"><span class="doimauchu">&#9776; Tìm Sim Năm Sinh , Tứ Quý....</span></button>

<script>
var out=false;
function openNav() {
if(out==false){
	document.getElementById("mySidenav").style.width = "250px";
   out=true;
}
else closeNav();
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	out=false;
}
</script>

  <div class="input-group">
      <span class="input-group-addon" style="background: white"><i class="glyphicon glyphicon-phone"></i></span>
      <input type="number" class="form-control" name="timso" placeholder="Nhập số sim cần tìm...">
      <span class="input-group-addon" style="background: white;"><i class="glyphicon glyphicon-search"></i></span>
    </div>
  <table class="table table-striped" style="border: 1px solid silver; margin-top: 3px">
    <thead>
      <tr>
        <th>Sim số</th>
        <th>Giá tiền</th>
        <th>Loại sim</th>
        <th>Ý nghĩa sim</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="item in items" class="hoversim">
        <td><b style="font-size: 20px">{{dinhdangsosim(item.sosim)}}</b></td>
        <td><b style="color: red;font-size: 17px">{{dinhdang(item.giasim)}}</b> <span style="color: silver;">đ</span></td>
        <td><b>{{item.ten}}</b></td>
        <td>{{item.tyn}}</td>
    	<td><button class="mua btn btn-primary">Đặt mua</button></td>
      </tr>
    </tbody>
  </table>
</div>

<script>
	var app = angular.module ('myapp' , []);
        	app.controller('hien', function($scope , $http) {
            	<?php  $id=isset($_GET["id"])?$_GET["id"]:'-1';?>
        		$http.get("showsim.php",{params:{id :	<?php echo $id ?> }}).then(function(data){
        			//	alert(JSON.stringify(data.data));
        					$scope.items = data.data;
        				
        			});
        		$scope.dinhdang = function(money){
        			if (money == 0) {
        	            return 0;
        	        }
        	        return money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        	        ;
        		};
        		$scope.dinhdangsosim = function(s){
        			if (s == 0) {
        	            return 0;
        	        }
        	        L  = s.length == 10 ? 4:5;
        	        a = s.substring(0,L);
        	        a =a + ".";
        	        b = s.substring(L,s.length);
        	        b = b.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        	        return a+b;
        	        ;
        		};
        		$http.get("danhmuc.php").then(function(data){
        				$scope.dm = data.data;
        			});
        	}); 
			
</script>	
</body>
</html>
	