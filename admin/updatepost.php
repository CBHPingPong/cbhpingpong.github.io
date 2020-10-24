<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login/index.php");
    exit;
}
?>
<head>
	  <link rel="stylesheet" href="/assets/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700">
</head>

 <nav class="nav">
  <div class="nav-container">
    <a href="/">
      <h2 class="nav-title">Dương Tùng Anh's Blog</h2>
    </a>
    <ul>
      <li><a href="/cv">CV</a></li>
      <li><a href="/about">Giới thiệu</a></li>
      <li><a href="/bookreview">Book Review</a></li>
	  <li><a href="/dailywriting">Daily Writing</a></li>
	  <li><a href="https://duongtunganh.github.io/en">English</a></li>
	  
    </ul>
  </div>
</nav>


<head>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <!-- Trumbowyg -->
<script src="/trumbowyg/dist/trumbowyg.min.js"></script>
<link rel="stylesheet" href="/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>


</head>
<body style="
    margin-left: 20px;
    margin-right: 20px;
">
<style type="text/css">
	@media only screen and (max-width: 479px){
    #con { width: 90%; }
}
</style>
<div class="content" id="con" style="
   padding-top: 20px;
    max-width: 800px; width: 100%;
    margin: 0 auto;
    position: relative;
">
<h2>Cập nhật bài viết</h2>
<form action="updatepost.php" method="POST" id="form1">
<label for="exampleFormControlInput1">Tiêu đề bài viết</label>

<br>
    <input type="text" id="text" name="name"  class="form-control form-control-lg" style="
    max-width: 500px; width: 100%;
">
<br>
<label for="id">ID</label>
<br>
<input type="text" id="text2" name="id"  class="form-control form-control-lg" value="<?php
error_reporting(0);
 echo $_GET['id'] ?>">

<?php
error_reporting(0);
 echo "<textarea name='content' id='trumbowyg-demo'></textarea>";
        echo "<script>$('#trumbowyg-demo').trumbowyg();</script>";
        echo "<input type='submit' id='submitbutton' name='submit'  value='Đăng bài viết'><br><br>";
        $str = (isset($_POST['content']) ? $_POST['content'] : '');
$content_m = nl2br($str);
require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
if(isset($_POST['submit'])){

        $name= mysqli_real_escape_string($db, $_POST['name']);

    $content = mysqli_real_escape_string($db, $content_m);
        $id = $_POST['id'];
        $query = "UPDATE posts SET content='".$content."', name='".$name."' WHERE id='$id'";
        $results_u = mysqli_query($db, $query);
         if ($db->query($query) === TRUE) {

  header("location: updatepost.php?f=die1");
} else {
  die ("Cập nhật bài viết thất bại!");

}
}
     if(function_exists($_GET['f'])) {
   $_GET['f']();
}
function die1(){
  die('Cập nhật bài viết thành công!');
}
function die2(){
  echo 'Cập nhật bài viết thất bại! Lỗi: ' . $db->error;
}
?>
 
</form>
</div>

 
			</body>

			