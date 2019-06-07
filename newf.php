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
    <h1 class="post-title">$ Nhật ký của Vĩ</h1>
  </header>

  <article class="post-content">
<?php 
	$i = 0; 
    $dir = 'baiviet/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
	if( isset($_POST['dumamay'] ))
	{
	$i = $i+1;
	$content= $_POST['dumamay']. PHP_EOL; 
	$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/$dir". "$i","wb");
	fwrite($fp,$content);
	fclose($fp);
	}
?>
<p>Đã đăng nhật ký mới thành công</p>
<p>Đang quay lại trang viết nhật ký, <a href="/lsv-manager.php">không tự động chuyển trang?</a>
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