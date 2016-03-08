<?php 
require_once('sys/connect.php');
$page=$_GET['action'];
            if($page==login){
  session_start();
require_once('sys/connect.php');
  $p = $_POST['Password'];
  $strSQL = "SELECT * FROM User WHERE Username = '".mysql_real_escape_string($_POST['Username'])."' 
  and Password = '".mysql_real_escape_string(base64_encode($p))."'";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  if(!$objResult)
  {
      echo "<script type='text/javascript'>alert('ชื่อผู็ใช้ หรือ รหัสผ่านผิดพลาด');location.replace('index.php')</script>";
  }
  else
  {
      $_SESSION["ID"] = $objResult["ID"];

      session_write_close();
      
      {
        header("location:home.php");
      }
  }
  mysql_close();
}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="th">
  <head>
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
  <script src="http://www.dc-siamcraft.com/survival/assets/jquery.js"></script>
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
<nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
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
            <li><a href="#">หน้าเเรก</a></li>
            <li><a href="#login">ล็อกอิน</a></li>
            <li><a href="#reg">สมัครสมาชิก</a></li>
            <li><a href="tmtopup.php">เติมเงิน</a></li>
            <li><a href="shop.php">สิ้นค้า</a></li>
            <li><a href="home.php">หน้าหลักผู้ใช้</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">ติดต่อ</a></li>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>
    
<div id="carousel-id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item">
      <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="image/bg1.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>ล็อกอิน</h1>
          <p><a class="btn btn-lg btn-primary" href="#login" role="button">กดเลย!!</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="image/bg2.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>สมัครสมาชิก</h1>
          <p><a class="btn btn-lg btn-primary" href="#reg" role="button">กดเลย!!</a></p>
        </div>
      </div>
    </div>
    <div class="item active">
      <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="image/bg3.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>เติมเงิน</h1>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">กดเลย!!</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<br>
<section id="login">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="jumbotron">
        <div class="container">
          <h1>ล็อกอิน</h1>
          <form role="form" action="index.php?action=login" method="post">
    <div class="form-group">
        <label for="Username">ชื่อผู้ใช้</label>
        <input type="Username" class="form-control" id="Username" name="Username" 
        placeholder="ชื่อผู้ใช้" checked>
    </div>
    <div class="form-group">
        <label for="Password">รหัสผ่าน</label>
        <input type="Password" class="form-control" name="Password" 
        id="Password" placeholder="รหัสผ่าน">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">ล็อกอิน</button>
</form>
</section>
<section id="reg">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="jumbotron">
        <div class="container">
          <h1>สมัครสมาชิก</h1>
          <form role="form" action="index.php?action=reg" method="post">
    <div class="form-group">
        <label for="Username">ชื่อผู้ใช้</label>
        <input type="Username" class="form-control" id="Username" 
        placeholder="ชื่อผู้ใช้" checked>
    </div>
    <div class="form-group">
        <label for="Password">รหัสผ่าน</label>
        <input type="Password" class="form-control" 
        id="Password" placeholder="รหัสผ่าน">
    </div>
    <div class="form-group">
        <label for="Password">รหัสผ่าน</label>
        <input type="Password" class="form-control" 
        id="cPassword" placeholder="รหัสผ่าน">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">สมัครสมาชิก</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
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