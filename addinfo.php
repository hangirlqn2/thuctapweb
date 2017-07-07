<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm tin tức</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <style>

    </style>
</head>
<body ng-app="myapp" ng-controller="cthem">
<div class="container">
    <h2>Thêm thông tin tin tức
        <span> <a href="admin.php"> <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Home</button> </a> </span>
        <span> <a href="javascript: history.back()"> <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Quay lại</button> </a> </span>
    </h2>
    <form class="themtt" action="#">
        <div class="form-group">
            <label for="loai">Loại</label>
            <select  class="form-control" id="loai" name="loai">
                <option value="{{item.id}}" ng-repeat="item in Ml">{{item.tenloai}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="loaihang">Hình</label>
            <input type="file" class="form-control" id="hinh" placeholder="Post hình.." name="hinh">
        </div>

        <div class="form-group">
            <label for="loai">Tiêu đề</label>
            <div>
                <input type="text" class="form-control" id="tieude" placeholder="Nhập tên tiêu đề cần thêm.." name="tieude">
            </div>
        </div>
        <div class="form-group">
            <label for="loai">Nội dung</label>
            <div>
                <textarea name="noidung" id="noidung" class="form-control"></textarea>
            </div>
        </div>



        <button style="background: black ; margin-bottom: 5px;color: white" type="submit" class="dy btn btn-default pull-right ">Đồng ý</button>
    </form>
</div>
<script>
    $(function(){
        $(".themtt").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "themtintuc.php",
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

    var app=angular.module('myapp',[]);
    app.controller('cthem',function ($scope , $http) {
        $http.get('getmaloaitt.php').then(function (data) {
            //alert(JSON.stringify(data.data))
            //   alert(JSON.stringify(data.data)    );
            $scope.Ml = data.data;
            //alert(JSON.stringify($scope.MaLoais)    );

        });
    });

</script>
</body>
</html>