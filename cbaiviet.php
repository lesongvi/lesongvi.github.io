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

  <div class="post-navigation">
    <div class="prev">
	<?php
	$cailon = 'disabled';
	$idt = $_GET['baiviet'];
	$idg = $idt - 1;
	if($idg>0){
    echo "<a href=cbaiviet.php?baiviet=",$idg,">"; 
	echo " trước đó</a>";
	} else {
	echo "<span class=",$cailon,">trước đó</span>";
		 }
?>
      
      
<span class="disabled">|</span> <?php 
    $i = 0; 
    $dir = 'baiviet/';
	$vikist = 'random-link';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
	$min=1;
	$max=$i;
	echo "<a id=",$vikist," href=cbaiviet.php?baiviet=",rand($min,$max),">";
	echo " ngẫu nhiên</a>";
?>

      <span class="disabled">|</span>
      
      	<?php
	$i = 0; 
    $dir = 'baiviet/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
	$cailon = 'disabled';
	$idt = $_GET['baiviet'];
	$idg = $idt + 1;
	if($idg <= $i){
    echo "<a href=cbaiviet.php?baiviet=",$idg,">"; 
	echo "tiếp theo</a>";
	} else {
	echo "<span class=",$cailon,">tiếp theo</span>";
		 }
?>
      
    </div>
  </div>  

  <article class="post-content">
<?php
if(isset($_GET["baiviet"])){
	$num = $_GET["baiviet"];
	$file=fopen("baiviet/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    	echo fread($file,filesize("baiviet/".$i));
    	fclose($file); $num--; //close file; decrement the pointer
    }else{
	  // Figure out how many blog posts there are on server
  	  // integer num used for incrementing
 	   $num = 0;
 	   $dir = 'baiviet/';
 	   if ($handle = opendir($dir)) {
 	       while (($file = readdir($handle)) !== false){
 	           if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
 	               $num++;
       	 }
	    }

	while($num >= 1) {  // loop to read all the blog posts
   		$file=fopen("baiviet/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    		echo fread($file,filesize("baiviet/".$num))."<br /><br />";
    		fclose($file); $num--; //close file; decrement the pointer
    	} // end loop
    }
	$filename = 'baiviet/'.$num;
	if (file_exists($filename)) {
    echo "</article>Lần cuối sửa đổi: " . date ("d, F, Y - H:i:s", filemtime($filename));
	}
?>    


  

  

  <p class="footer-fonts"><?php if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
$protocol = 'https://';
}
else {
$protocol = 'http://';
}

$current_link = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
    twitter.<a target="_blank" href="https://twitter.com/songvivn">follow()</a> |
    twitter.<a class="featured-button" href="javascript:window.open('https://twitter.com/share?url=<?php echo $current_link ?>&text=Nhật%20ký%20của%20Vĩ','Tweet','width=500,height=300')" alt="Tweet nó!">tweet(this)</a>   
    <br> 
    facebook.<a target="_blank" href="https://www.facebook.com/lesongviga">follow()</a>
    |
    facebook.<a class="featured-button" href="javascript:window.open('http://www.facebook.com/sharer.php?u=<?php echo $current_link ?>','Chia sẽ','width=500,height=300')" alt="Chia sẽ!">post(this)</a>
    |
    LSV.<a href="/sign.php">sign()</a>
  </p>  

  <div>
    
    <!-- turnoff -->
    
    
  </div>

<?php
	include('vi/disqus.php');
	?>
  
    <h3>Những bài viết mới nhất</h3>
  

  <ul class="post-list">
  <?php
    $i = 0;
    $biendem = 0;
	$videptrai = 'post-link';
    $dir = 'baiviet/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
	$biendem = $i;
    $x=$i - ($biendem - 1);
    while($i >= $x) {  // loop three times
    echo "<li><h2><a class=",$videptrai," href=cbaiviet.php?baiviet=",$i,">"; 
    $file=fopen("baiviet/".$i,"r") or exit("Lỗi khi xem bài viết!");
    echo strip_tags(fgets($file))."</a></h2></li>";
    fclose($file); $i--;
    }

?>
  </ul>
  <div class="buttons-bar">
    <a class="post-link-all" href="/xemtatca.php">Xem tất cả</a>
  </div>

</div>
      </div>
    </div>

<?php
include('vi/site-footer.php');
include('vi/scriptfooter.php');
?>

  


</body></html>