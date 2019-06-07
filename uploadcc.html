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
<?php
$target_dir = "image/p/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Đây là file hình ảnh - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Đây không phải là file hình ảnh.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Xin lỗi, file này đã tồn tại.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Xin lỗi, kích thước file quá lớn.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Xin lỗi, chỉ chấp nhận JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Xin lỗi, file của bạn không được tải lên.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ". basename( $_FILES["fileToUpload"]["name"]). " đã được tải lên, kiểm tra đường dẫn tại http://vi.roleplay.vn/image/p/". basename( $_FILES["fileToUpload"]["name"]). ".";
    } else {
        echo "Xin lỗi, đã có lỗi xảy ra khi tải lên file của bạn.";
    }
}
?>
<p>Đang quay lại trang viết nhật ký, <a href="/lsv-manager.php">không tự động chuyển trang?</a></p>
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