<?php
#====================================================
require_once('sys/connect.php');
$idshop = $_POST['idshop'];
$nameshop = $_POST['name'];
$name = $_POST['name'];
$un = $_POST['username'];
$strSQL = "SELECT * FROM shop WHERE ID = '$idshop' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$sql = "SELECT * FROM User WHERE Username = '$un' ";
$o = mysql_query($sql);
$r = mysql_fetch_array($o);
$rm = $r["money"];
$m2 = $objResult["money"];
$mon = "money";
#=====================================================
if($rm < $objResult["money"]){
	echo "<script type='text/javascript'>alert('เงินไม่พอต้องการเงินอีก');location.replace('shop.php')</script>";
}
else
{
	{
		$moo = $rm - $m2;
	    $s1 = "UPDATE User SET $mon = '$moo' WHERE Username = '$un' ";
        $result = mysql_query($s1);
	}
	{
		$cmd = $objResult["cmd"];
		$cmd = str_replace('<name>',$name,$cmd);
		if ($rcon->connect())
		{
		  $rcon->send_command($cmd);
		}
	}
	{
		$smo =  $objResult["money"];
        echo "<script type='text/javascript'>alert('ซื้อสินค้านนี้เเล้วด้วยจำนวนเงิน $smo บาท ตอนนี้คุณเหลือเงินอยู่ $moo บาท');location.replace('shop.php')</script>";
	}
}
#=====================================================
?>