<?php
include 'connect.php';

$un = $_GET["un"];
$qr = "SELECT * FROM user
	   WHERE tendangnhap='$un'	";
$duyet=$db->query($qr);
$fet=$duyet->fetchAll(PDO::FETCH_ASSOC);
echo count($fet);

?>