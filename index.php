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
        <div class="home">

  
  

  <div class="post">

    <header class="post-header">
      <meta charset="utf-8">
      <h1 class="post-title">$ Vĩ Blog</h1>
    </header>

    <div class="post-navigation">
      <div class="prev">
        
        <span class="disabled"> trước đó |</span> <?php 
    // integer starts at 0 before counting
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
	echo "<a class=vdt2 id=",$vikist," href=cbaiviet.php?baiviet=",rand($min,$max),">";
	echo " ngẫu nhiên</a>";
?>
        <span class="disabled">| tiếp theo</span>
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
    }
    if($num >= 1) {  // loop to read all the blog posts
   		$file=fopen("baiviet/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    		echo fread($file,filesize("baiviet/".$num))."<br /><br />";
    		fclose($file); $num--; //close file; decrement the pointer
    	} // end loop
	$filename = 'baiviet/'.$num;
	if (file_exists($filename)) {
    echo "</article>Lần cuối sửa đổi: " . date ("d, F, Y - H:i:s", filemtime($filename));
	}
?>    

    </article>

  </div>

  <p class="footer-fonts">
    twitter.<a target="_blank" href="https://twitter.com/songvivn">follow()</a> |
    twitter.<a class="featured-button" href="javascript:window.open('https://twitter.com/share?url=http%3A%2F%2Fviroleplay.vn&via=songvivn&text=Nhật%20ký%20của%20Vĩ','Tweet','width=500,height=300')" alt="Tweet nó!">tweet(this)</a>   
    <br> 
    facebook.<a target="_blank" href="https://www.facebook.com/lesongviga">follow()</a>
    |
    facebook.<a class="featured-button" href="javascript:window.open('http://www.facebook.com/sharer.php?u=http://vi.roleplay.vn/','Chia sẽ','width=500,height=300')" alt="Chia sẽ!">post(this)</a>
    |
    LSV.<a href="/sign.php">sign()</a>
  </p>  

  <div>
    
    <!-- songvi -->
    
    
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

  <div class="site-description">
    <h2>{blog.error.vn} là một trang blog do Lê Song Vĩ viết, về đời sống, tình cảm, tâm tư, tâm sự, nói chuyện thế giới, lập trình, ... :)). Bạn có thể theo dõi mình ở <a target="_blank" href="https://twitter.com/songvivn">twitter</a>, <a target="_blank" href="https://www.facebook.com/lesongviga">facebook</a>  hoặc thêm cho mình một sub ở <a href="https://www.youtube.com/channel/UCRaHiKkQVWIZxQKN00ID5iQ">Youtube</a>.</h2>
  </div>

</div>

      </div>
    </div>

<?php
include('vi/site-footer.php');
include('vi/scriptfooter.php');
?>


  


<iframe style="display: none;"></iframe></body></html>