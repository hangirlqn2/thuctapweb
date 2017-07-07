<?php
    include "connect.php";


      if (isset($_FILES["hinhsanpham"]['name']))
          $hinh = $_FILES["hinhsanpham"]['name'];
      else
          $hinh = '';
      if (isset($_POST["tensanpham"]))
          $ten = $_POST["tensanpham"];
      else
          $ten = '';
      if (isset($_POST["giasanpham"]))
          $gia = $_POST["giasanpham"];
      else
          $gia = 0;
      if (isset($_POST["luotmua"]))
          $luotmua = $_POST["luotmua"];
      else
          $luotmua = 0;
      if (isset($_POST["loaihang"]))
          $loaihang = $_POST["loaihang"];
      else
          $loaihang = 0;
      if (isset($_POST["manhinh"]))
          $manhinh = $_POST["manhinh"];
      else
          $manhinh = '';
      if (isset($_POST["hedieuhanh"]))
          $hedieuhanh = $_POST["hedieuhanh"];
      else
          $hedieuhanh = '';
      if (isset($_POST["camsau"]))
          $camsau = $_POST["camsau"];
      else
          $camsau = '';
      if (isset($_POST["camtruoc"]))
          $camtruoc = $_POST["camtruoc"];
      else
          $camtruoc = '';
      if (isset($_POST["CPU"]))
          $cpu = $_POST["CPU"];
      else
          $cpu = '';
      if (isset($_POST["RAM"]))
          $ram = $_POST["RAM"];
      else
          $ram = '';
      if (isset($_POST["ROM"]))
          $rom = $_POST["ROM"];
      else
          $rom = '';
      if (isset($_POST["thesim"]))
          $sim = $_POST["thesim"];
      else
          $sim = '';
      if (isset($_POST["pin"]))
          $pin = $_POST["pin"];
      else
          $pin = '';
      if(isset($_POST["nhasanxuat"]))
          $nhasanxuat=$_POST["nhasanxuat"];
      else
          $nhasanxuat='';
      if(isset($_POST["cachketnoi"]))
          $cachketnoi=$_POST["cachketnoi"];
      else
          $cachketnoi='';
      if(isset($_POST["trongluongg"]))
          $trongluongg=$_POST["trongluongg"];
      else
          $trongluongg='';
      if(isset($_POST["model"]))
          $model=$_POST["model"];
      else
          $model='';
      if(isset($_POST["cs"]))
          $cs=$_POST["cs"];
      else
          $cs='';
      if(isset($_POST["tluong"]))
          $tluong=$_POST["tluong"];
      else
          $tluong='';
      if(isset($_POST["ketnoimang"]))
          $ketnoimang=$_POST["ketnoimang"];
      else
          $ketnoimang='';
      if(isset($_POST["trongluong"]))
          $trongluong=$_POST["trongluong"];
      else
          $trongluong='';
      if(isset($_POST["j"]))
          $j=$_POST["j"];
      else
          $j='';
      if(isset($_POST["ddd"]))
          $ddd=$_POST["ddd"];
      else
          $ddd='';
      if(isset($_POST["nv"]))
          $nv=$_POST["nv"];
      else
          $nv='';
      if(isset($_POST["nr"]))
          $nr=$_POST["nr"];
      else
          $nr='';
      if(isset($_POST["ocung"]))
          $ocung=$_POST["ocung"];
      else
          $ocung='';
      if(isset($_POST["cardmanhinh"]))
          $cardmanhinh=$_POST["cardmanhinh"];
      else
          $cardmanhinh='';
      if(isset($_POST["congketnoi"]))
          $congketnoi=$_POST["congketnoi"];
      else
          $congketnoi='';







      $time =date("Y-m-d",time());

      $t = "INSERT INTO `sanpham`(`id`, `hinhphone`, `tenphone`, `giaphone`, `time`, `Loaihang`, `luotmua`, `manhinh`, `hedieuhanh`, `camsau`
, `camtruoc`, `CPU`, `RAM`, `ROM`, `thesim`, `pin`,`nhasanxuat`,`ckn`,`tl`,`model`,`cs`,`tluong`,`j`,`ddd`,`nv`,`nr`,`ocung`,`cardmanhinh`,`congketnoi`,`ketnoimang`,`trongluong`) VALUES (NULL ,'$hinh','$ten',$gia,$time,$loaihang,$luotmua,'$manhinh','$hedieuhanh','$camsau','$camtruoc','$cpu','$ram','$rom','$sim','$pin','$nhasanxuat','$cachketnoi','$trongluongg','$model','$cs','$tluong','$j','$ddd','$nv','$nr','$ocung','$cardmanhinh','$congketnoi','$ketnoimang','$trongluong'
)";

      $num = $db->exec($t);

      echo $t . $num;

  copy($_FILES['hinhsanpham']['tmp_name'],'./images/'.$_FILES['hinhsanpham']['name']);