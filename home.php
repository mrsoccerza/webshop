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
  $strSQL = "SELECT * FROM User WHERE ID = '".$_SESSION['ID']."' "; 
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
$ip = $_SERVER['REMOTE_ADDR'];
?>
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
            <li class="active"><a href="home.php">หน้าหลัก</a></li>
            <li><a href="#">IP:<?php echo $ip ?></a></li>
            <li><a href="#">เงินคงเหลือ:<?php echo $objResult["money"] ?> บาท</a></li>
            <li><a href="#">ชื่อ:<?php echo $objResult["Username"] ?></a></li>
            <li><a href="shop.php">สินค้า</a></li>
            <li><a href="tmtopup.php">เติมเงิน</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">ออกจากระบบ</a></li>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="jumbotron">
        <div class="container">
<h1>ประกาศ</h1>  
<h2>
1.รออัพเกต......
<br>
2.รออัพเกต......
<br>
3.รออัพเกต......
<br>
4.รออัพเกต......
<br>
5.รออัพเกต...... 
</h2>












        </div>
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