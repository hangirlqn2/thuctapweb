<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <style>

    </style>
</head>
<body ng-app="them" ng-controller="cthem">
<?php
$tb = $_GET['loai'];
if(!isset($_GET["ml"])) {
    $if = '0';
}else
    $if = $_GET["ml"];
?>
<div class="container">
    <h2>Thêm sản phẩm
        <span> <a href="admin.php"> <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Home</button> </a> </span>
        <span> <a href="javascript: history.back()"> <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Quay lại</button> </a> </span>
    </h2>
    <form class="themclass" action="#">
        <div class="form-group">
            <label for="loaihang">Loại hàng</label>
            <SELECT  class="form-control" id="loaihang" name="loaihang">
                <option value="{{item.Maloai}}" ng-repeat="item in Maloais">{{item.Tenloai}}</option>

            </SELECT>
        </div>
        <div class="form-group">
            <label for="loaihang">Hình sản phẩm</label>
            <input type="file" class="form-control" id="hinhsanpham" placeholder="Post hình sản phẩm cần thêm.." name="hinhsanpham">
        </div>
        <div class="form-group">
            <label for="loaihang">Tên sản phẩm</label>
            <input type="text" class="form-control" id="tensanpham" placeholder="Nhập tên sản phẩm.." name="tensanpham">
        </div>
        <div class="form-group">
            <label for="loaihang">Giá sản phẩm</label>
            <input type="text" class="form-control" id="giasanpham" placeholder="Nhập giá sản phẩm.." name="giasanpham">
        </div>
        <div class="form-group">
            <label for="loaihang">Lượt mua</label>
            <input type="text" class="form-control" id="luotmua" placeholder="Nhập lượt mua.." name="luotmua">
        </div>

        <?php if($tb =="1" || $tb=='0' || $tb=='2'){ ?>
        <div class="form-group">
            <label for="loaihang">Màn hình</label>
            <input type="text" class="form-control" id="manhinh" placeholder="Nhập màn hình sản phẩm.." name="manhinh">
        </div>
        <div class="form-group">
            <label for="loaihang">Hệ điều hành</label>
            <input type="text" class="form-control" id="hedieuhanh" placeholder="Nhập hệ điều hành sản phẩm.." name="hedieuhanh">
        </div>
        <?php }?>

        <?php if($tb=="0" || $tb=="2") { ?>
        <div class="form-group">
            <label for="loaihang">Camera sau</label>
            <input type="text" class="form-control" id="camsau" placeholder="Nhập Camera sau sản phẩm.." name="camsau">
        </div>
        <div class="form-group">
            <label for="loaihang">Camera trước</label>
            <input type="text" class="form-control" id="camtruoc" placeholder="Nhập Camera trước sản phẩm.." name="camtruoc">
        </div>
        <?php }?>

        <?php if($tb=="1") { ?>
            <div class="form-group">
                <label for="loaihang">Card màn hình</label>
                <input type="text" class="form-control" id="cardmanhinh" placeholder="Nhập card màn hình.." name="cardmanhinh">
            </div>
            <div class="form-group">
                <label for="loaihang">Ổ cứng</label>
                <input type="text" class="form-control" id="ocung" placeholder="Nhập ổ cứng.." name="ocung">
            </div>
            <div class="form-group">
                <label for="loaihang">Cổng kết nối</label>
                <input type="text" class="form-control" id="congketnoi" placeholder="Nhập cổng kết nối.." name="congketnoi">
            </div>
        <?php }?>

        <?php if($tb=="0" || $tb=="1" || $tb=="2") { ?>
        <div class="form-group">
            <label for="loaihang">CPU</label>
            <input type="text" class="form-control" id="CPU" placeholder="Nhập CPU sản phẩm.." name="CPU">
        </div>
        <div class="form-group">
            <label for="loaihang">RAM</label>
            <input type="text" class="form-control" id="RAM" placeholder="Nhập RAM sản phẩm.." name="RAM">
        </div>
        <div class="form-group">
            <label for="loaihang">ROM</label>
            <input type="text" class="form-control" id="ROM" placeholder="Nhập ROM sản phẩm.." name="ROM">
        </div>
        <?php }  ?>

        <?php if($tb=="0") { ?>
        <div class="form-group">
            <label for="loaihang">Thẻ sim</label>
            <input type="text" class="form-control" id="thesim" placeholder="Nhập số sim sản phẩm.." name="thesim">
        </div>
        <div class="form-group">
            <label for="loaihang">Pin</label>
            <input type="text" class="form-control" id="pin" placeholder="Nhập dung lượng pin sản phẩm.." name="pin">
        </div>
        <?php } ?>

        <?php if ($tb=="18") { ?>
        <div class="form-group">
            <label for="loaihang">Nhà sản xuất</label>
            <input type="text" class="form-control" id="nhasanxuat" placeholder="Nhập nhà sản xuất sản phẩm.." name="nhasanxuat">
        </div>
        <div class="form-group">
            <label for="loaihang">Cách kết nối</label>
            <input type="text" class="form-control" id="cachketnoi" placeholder="Nhập cách kết nối sản phẩm.." name="cachketnoi">
        </div>
        <div class="form-group">
            <label for="loaihang">Trọng lượng</label>
            <input type="text" class="form-control" id="trongluongg" placeholder="Nhập trọng lượng chuột.." name="trongluongg">
        </div>
        <?php } ?>

        <?php if($tb=="21") { ?>

            <div class="form-group">
                <label for="loaihang">Nhà sản xuất</label>
                <input type="text" class="form-control" id="nhasanxuat" placeholder="Nhập nhà sản xuất sản phẩm.." name="nhasanxuat">
            </div>
        <div class="form-group">
            <label for="loaihang">Model</label>
            <input type="text" class="form-control" id="model" placeholder="Nhập model.." name="model">
        </div>
        <div class="form-group">
            <label for="loaihang">Công suất</label>
            <input type="text" class="form-control" id="congsuat" placeholder="Nhập công suất.." name="cs">
        </div>
        <div class="form-group">
            <label for="loaihang">Trọng lượng</label>
            <input type="text" class="form-control" id="trongluong" placeholder="Nhập trọng lượng.." name="tluong">
        </div>

        <?php } ?>

        <?php if($tb=="2") { ?>
            <div class="form-group">
                <label for="loaihang">Kết nối mạng</label>
                <input type="text" class="form-control" id="ketnoimang" placeholder="Kết nối mạng.." name="ketnoimang">
            </div>
            <div class="form-group">
                <label for=loaihang">Trọng lượng</label>
                <input type="text" class="form-control" id="trongluong" placeholder="Nhập trọng lượng.." name="trongluong">
            </div>

        <?php } ?>

        <?php if($tb=="19") { ?>
            <div class="form-group">
                <label for="loaihang">Jack cắm</label>
                <input type="text" class="form-control" id="j" placeholder="Nhập độ dài jack cắm.." name="j">
            </div>
            <div class="form-group">
                <label for="loaihang">Độ dài dây</label>
                <input type="text" class="form-control" id="ddd" placeholder="Nhập độ dài dây.." name="ddd">
            </div>

        <?php } ?>


        <?php if($tb=="20") { ?>
            <div class="form-group">
                <label for="loaihang">Nguồn vào</label>
                <input type="text" class="form-control" id="nv" placeholder="Nhập nguồn vào.." name="nv">
            </div>
            <div class="form-group">
                <label for="loaihang">Nguồn ra</label>
                <input type="text" class="form-control" id="nr" placeholder="Nhập nguồn ra.." name="nr">
            </div>

        <?php } ?>

        <input type="hidden" name="loai" value="<?php echo $tb ?>">


        <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Đồng ý</button>
    </form>
</div>
<script>

    $(function(){
        $(".themclass").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "them.php",
                type:'post',
                data:new FormData(this),
                cache:false,
                processData: false,
                contentType:false,
                success: function (data) {
                    alert(data);
                }
            });
        });
    });
    
    
    var app=angular.module('them',[]);
    app.controller('cthem',function ($scope , $http) {
        GetMaLoais=function () {
          $http.get('getmaloai.php',{
              params:{
                  loai: <?php echo $tb?>
                  ,ml : <?php echo $if?>
              }
          }).then(function (data) {
          //   alert(JSON.stringify(data.data)    );
               $scope.Maloais=data.data;
               //alert(JSON.stringify($scope.MaLoais)    );

          });
        };
        GetMaLoais();
    });
</script>
</body>
</html>