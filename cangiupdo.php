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
<form accept-charset="utf-8" name="form" action="toicangiup.php" method="post">
	<input type="text" name="tieude" value="" placeholder="Bạn cần giúp gì?" required>
	<input type="url" name="lienhe" value="" placeholder="Đường dẫn Facebook/Google để liên hệ" required>
    <textarea name="dumamay" id="dumamay" rows="100%" cols="100%" placeholder="Giải thích rõ hơn"></textarea>
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