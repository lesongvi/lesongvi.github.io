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
    <h1 class="post-title">$ Tôi cần giúp đỡ</h1>
  </header>

  <article class="post-content">
<?php
if( isset($_POST['tieude'] ) && isset( $_POST['lienhe'] ) && isset( $_POST['dumamay'] ))
{
    $txt= $_POST['tieude'].'/'.$_POST['lienhe'].'/'.$_POST['dumamay'] . PHP_EOL; 
    file_put_contents('toicangiup/toicangiup.txt', $txt, FILE_APPEND);
}
?>
<p>Lê Song Vĩ đã nhận được yêu cầu trợ giúp của bạn</p>
<p>Vĩ sẽ cố gắng phản hồi càng nhanh càng tốt</p>
<?php 
echo "Đã nhận yêu cầu trợ giúp, lúc " . date("Y/m/d h:i:sa");
?>
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