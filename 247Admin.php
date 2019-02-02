<html>
<head><title>Compose</title></head>
<meta name="viewport" content="user-scalable=0">
<script>
	function gi1(){
	var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
    en2.checked = false;
    sp2.checked = false;
    fo2.checked = false;
    lo2.checked = false;
    ed2.checked = false;
	}
	function en1(){
	var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
	gi2.checked = false;
    sp2.checked = false;
    fo2.checked = false;
    lo2.checked = false;
    ed2.checked = false;
	}
	function sp1(){
	var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
	en2.checked = false;
    gi2.checked = false;
    fo2.checked = false;
    lo2.checked = false;
    ed2.checked = false;
	}
	function fo1(){
	var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
	en2.checked = false;
    sp2.checked = false;
    gi2.checked = false;
    lo2.checked = false;
    ed2.checked = false;
	}
	function lo1(){
    var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
	en2.checked = false;
    sp2.checked = false;
    fo2.checked = false;
    gi2.checked = false;
    ed2.checked = false;
	}
	function ed1(){
	var gi2 = document.getElementById("gi");
	var en2 = document.getElementById("en");
	var sp2 = document.getElementById("sp");
	var fo2 = document.getElementById("fo");
	var lo2 = document.getElementById("lo");
	var ed2 = document.getElementById("ed");
	en2.checked = false;
    sp2.checked = false;
    fo2.checked = false;
    lo2.checked = false;
    gi2.checked = false;
	}
</script>
<body style="margin:0">
<div style="position:absolute;width:100%;height:100%;background-image:linear-gradient(60deg, white, lightgray)" id="view">
<script>
function auth(){
  var au = document.getElementById("pass");
  var v = document.getElementById("view");
  var c = document.getElementById("con");
  if (au.value == "1234"){
    v.style.visibility="hidden";
    c.style.visibility="visible";
  }
  else{
  	alert("Invalid Security Code");
  }
}
</script>
<p style="padding-top:40vh;text-align:center">
<font face="candara" size="5"><b>Enter the Admin Security Code to Proceed</b></font>
</p>
<p style="text-align:center">
<input type="password" id="pass" style="width:500px;padding-left:10px;padding-right:10px;border-radius:20px;font-family:candara;font-size:25px;font-weight:bold">
</p>
<p style="text-align:center"><input type="button" onclick="auth()" style="padding-left:10px;padding-right:10px;border-radius:20px;font-family:candara;font-size:25px;font-weight:bold;background-color:tomato;color:white" value="Login"></p>
</div>
<div style="width:100%;height:100%;overflow-y:auto;visibility:hidden" id="con">
<form action="247Admin.php" method="post" enctype="multipart/form-data">
<div style="float:left;width:75%;height:100%;overflow-y:auto">
<p align="center" style="text-decoration:underline"><b><font face="candara" size="5" color="tomato">New Post</font></b></p>
<center><table style="width:100%"><tr><td style="text-align:center;padding-bottom:40px">
<button style="width:450px;height:400px;background-color:transparent;border:0"><img src="Add.png" id="fl" style="width:100%;height:100%">
<input type="file" accept="image/*" title="Cover photo" name="upload" onchange="document.getElementById('fl').src = window.URL.createObjectURL(this.files[0]);" style="opacity:0;position:relative;top:-360px;height:360px;width:450px;cursor:hand"></button>
</td></tr>
<tr><td style="text-align:center"><b><font face="cooper" size="5" color="black">Enter Post Title</font></b></td></tr>
<tr><td style="text-align:center"><input type="text" name="tit" style="border:0;border-bottom:2px solid gray;width:50%;font-family:candara;font-size:20px;font-weight:bold"></td></tr>
<tr><td style="text-align:center;padding-top:20px"><b><font face="cooper" size="5" color="tomato">Content (Description)</font></b></td></tr>
<tr><td style="text-align:center"><textarea name="cont" style="width:50%;height:400px;font-family:candara;font-size:24px" maxlength="50000"></textarea></td></tr>
</table></center>
</div>
<div style="float:right;width:25%;height:100%;overflow-y:auto">
<p align="center" style="text-decoration:underline"><b><font face="candara" size="5" color="tomato">Choose Category</font></b></p>
<table style="width:100%;padding-left:20px" cellspacing="10">
<tr><td><pre><input type="checkbox" checked style="height:15px;width:15px" name="gi" id="gi" onclick="gi1()">  <font face="candara" size="5" color="gray">Gist</font></td></pre></tr>
<tr><td><pre><input type="checkbox" style="height:15px;width:15px" name="ed" id="ed" onclick="ed1()">  <font face="candara" size="5"  color="gray">Education</font></td></pre></tr>
<tr><td><pre><input type="checkbox" style="height:15px;width:15px" name= "en" id="en" onclick="en1()">  <font face="candara" size="5"  color="gray">Entertainment</font></td></pre></tr>
<tr><td><pre><input type="checkbox" style="height:15px;width:15px" name="sp" id="sp" onclick="sp1()">  <font face="candara" size="5"  color="gray">Sports</font></td></pre></tr>
<tr><td><pre><input type="checkbox" style="height:15px;width:15px" name="fo" id="fo" onclick="fo1()">  <font face="candara" size="5"  color="gray">Foreign</font></td></pre></tr>
<tr><td><pre><input type="checkbox" style="height:15px;width:15px" name="lo" id="lo" onclick="lo1()">  <font face="candara" size="5"  color="gray">Local</font></td></pre></tr>
<tr><td style="text-align:center;padding-top:20px"><input type="submit" name="submit" style="background-image:linear-gradient(60deg,tomato,#ff8080);padding-top:2px;padding-bottom:2px;padding-left:10px;padding-right:10px;text-align:center;border-radius:10px;font-weight:bold;font-family:candara;font-size:20px;color:white" value="POST"></td></tr>
</table>
</div>
</form>
</div>
</html>
<?php
if (isset($_FILES['upload'])){
  if (isset($_POST['submit'])){
  	$filename = $_FILES['upload']['name'];
  	$file_tmp_name = $_FILES['upload']['tmp_name'];
  	$targetdir = 'Posts/';
  	$fl = $targetdir.$filename;
    $tit = $_POST['tit'];
    $title = str_replace("'","''",$tit);
    $con = $_POST['cont'];
    $cont = str_replace("'","''",$con);
   if (isset($_POST['gi'])){
   	 if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO gist(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
   if (isset($_POST['ed'])){
     if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO education(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
   if (isset($_POST['en'])){
     if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO entertainment(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
   if (isset($_POST['sp'])){
     if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO sports(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
   if (isset($_POST['fo'])){
     if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO foreignnews(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
   if (isset($_POST['lo'])){
     if (move_uploaded_file($file_tmp_name,$fl)){
   	   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
       $q = mysqli_query($db, "INSERT INTO local(cover,title,content) VALUES('$fl','$title','$cont')");
       $q2 = mysqli_query($db, "INSERT INTO latest(cover,title,content) VALUES('$fl','$title','$cont')");
       echo '<script>alert("Successfully Posted");</script>';
   	 }
   }
  }
}
?>