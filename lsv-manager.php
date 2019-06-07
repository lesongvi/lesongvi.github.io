<?php
$username = "lesongvi";
$password = "binhtien";
$nonsense = "caiconcac";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<?php
	include('vi/head.php');
	?>

  <body>

<?php
include('vi/viloader.php');
include('vi/site-header.php');
?>
<div class="site-header-line">
</div>
<div class="site-line-top">
</div>


    <div class="page-content">
      <div class="wrapper">
        <div class="post">

  <header class="post-header">
  	<meta charset="utf-8">
    <h1 class="post-title">$ Vĩ Blog</h1>
  </header>

  <article class="post-content">
    <form enctype="multipart/form-data" action="viupnhatky.php" method="POST">
    <p>Upload blog viết sẵn</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input></form><br>
	<br>
	<form action="uploadcc.php" method="post" enctype="multipart/form-data">
    Chọn ảnh để tải lên:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Tải lên" name="submit">
</form><br><br>
<form accept-charset="utf-8" name="form" action="newf.php" method="post">
    <textarea name="dumamay" id="dumamay" rows="100%" cols="100%">Viet blog nao !!! Vi ey</textarea>
  <input type="submit" value="Submit"> <input type="reset">
</form>

</article>
    
    
  </div>
 

</div>
      </div>
    </div>

<?php
include('vi/site-footer.php');
include('vi/scriptfooter.php');
?>

  


</body></html>
<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Bien.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Sai pass, bien.";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Bien.";
   }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lesongvi" />
	<script async src="/js/imgload.js"></script>
    <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/vistyle.css" />
    	<title>Quản lý</title>
</head>
<body>
<div id="top">
<p class="title">HỆ THỐNG CHUYỂN HƯỚNG CAO CẤP</p>
</div>

<div id="main">
<div id="formLogin" style="text-align:center;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<input type="hidden" name="ac" value="login" />
<div class="box">
<div class="title">Đăng nhập hệ thống</div>
<div class="content">
<input type="text" name="user" id="user" placeholder="Tài khoản" /><br />
<input type="password" name="keypass" id="keypass" placeholder="Mật khẩu" /><br />

<input type="submit" value="ĐĂNG NHẬP" /><br />
<a href="manual.php" class="aBtn">Xem hướng dẫn sử dụng</a>
<p id="stt"></p>
</div>

</div>
</form>
</div>
<script>
function login()
{
    $.post("ajax.php",$("#frmLogin").serialize(),function(data,status){
        data=JSON.parse(data);
        if(data['stt']=="OK")
        {
            $("#stt").css("color","lime");
            $("#stt").html("Đăng nhập thành công, đang chuyển hướng...");
            location.reload();
        }else{
            $("#stt").html("Sai tên tài khoản hoặc mật khẩu...");
            nhap=10;
        }
    });
}
nhap=10;
function nhapnhay()
{
    setInterval(function(){
        
        if(nhap>-1)
        {
            
            var cl=(nhap%2==0)?"red":"#000";
            $("#stt").css("color",cl);
            nhap--;
        }
    },300);
}
nhapnhay();
</script>
</div>

<div id="bottom">
<p>
<a>Copyright @ 2018 LSV</a>
</p>
</div>
</body>
</html>