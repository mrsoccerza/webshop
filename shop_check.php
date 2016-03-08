<?php
  session_start();
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
  if($_SESSION['ID'] == "")
  {
    echo "<script type='text/javascript'>alert('คุณยังไม่ได้ล็อกอิน');location.replace('index.php')</script>";
    exit();
  }
require_once('sys/connect.php');
$meSql = "SELECT * FROM shop ";
$meQuery = mysql_query($meSql);
$strSQL = "SELECT * FROM User WHERE ID = '".$_SESSION['ID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$ip = $_SERVER['REMOTE_ADDR'];
?>
<html lang="th">
  <head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            
            <!-- Main Style -->
            <link rel="stylesheet" type="text/css" href="assets/css/main.css">

            <!--Icon Fonts-->
            <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webshop | MC-servername</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<style>
    .blocktext {
        margin-left: auto;
        margin-right: auto;
        vertical-align: middle;
    }
    img.bg {
    min-height: 100%;
    min-width: 1024px;
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
  }
  @media screen and (max-width: 1024px) { 
    img.bg {
      left: 50%;
      margin-left: -512px;  
    }
  }
  #pw {
    position: relative;
    width: auto;
    height: auto;
  }
</style>
<img src="image/bg4.png" class="bg">
<header id="navigation" class="navbar-fixed-top">
<nav class="navbar navbar-inverse navbar-fixed-top">        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">WebShop | Mc-servername</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WebShop | Mc-servername</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">หน้าหลัก</a></li>
            <li><a href="#">IP:<?php echo $ip ?></a></li>
            <li><a href="#">เงินคงเหลือ:<?php echo $objResult["money"] ?> บาท</a></li>
            <li><a href="#">ชื่อ:<?php echo $objResult["Username"] ?></a></li>
            <li class="active"><a  href="#">สินค้า</a></li>
            <li><a href="tmtopup.php">เติมเงิน</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">เมนูสินค้า <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#rock">ยศ</a></li>
            <li><a href="#item">ไอเท็ม</a></li>
            <li><a href="#money">เงิน</a></li>
            <li><a href="#VIP">พิเศษ</a></li>
          </ul>
        </li>
      </ul>
    </div>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <section id="pricing-table">

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="jumbotron">
<section id="rock" >

<?php
$id = $_GET["id"];
$name = $_GET["name"];
$money = $_GET["money"];
$n = base64_decode($name);
$m = base64_decode($money);
echo "<h2>ยืนยันการสั่งซื้อสินค้า</h2>";
echo "<br>";
echo "ชื่อสินค้า:$n";
echo "<br>";
echo "ราคาสินค้า:$m บาท";
?>
<form action="shop_buy.php" method="post" role="form">
    <label for="">รหัสสินค้า</label>
    <input type="text" class="form-control" id="idshop" name="idshop" readonly value="<?php echo base64_decode($id);?>">
    <label for="">ชื่อผู็ซื้อ</label>
    <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $objResult["Username"];?>">
    <label for="">ชื่อในเกม</label>
    <h5>**คุณต้องออนไลน์อยู่ในเกมส์ถ้าไม่ถูกของจะไม่เข้าตัวละครของท่าน</h5>
    <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อในเกมส์">
<br>
<button type="submit" class="btn btn-primary">ยืนยันการสั่งชื้อ</button>
</form>
</section>

        </section>
        </div>
        </div>
        </div>
        </div>


<center>
Coppyright &copy; 2016 Webshop v.1.0.0 All right reserved Developed by <a target="_blank" href="https://www.fb.com/adminsoccermc">กิตติทัต ปทีปกร</a>
</center>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="Hello World"></script>
  </body>
</html>
