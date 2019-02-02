<?php
 @session_start();
 if (!isset($_SESSION['client'])){
 	echo '<script>window.location.replace("index.php");</script>';
 }
 $ns = $_SESSION['news'];
?>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9246236177173933",
          enable_page_level_ads: true
     });
</script>
<title>Read News</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
<a href="News.php"><font color="maroon" size="5" face="candara">Back</font></a>
<center>
<table style="padding-top:2vh;width:70%;padding-bottom:40px">
<?php
 $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
 $q1 = mysqli_query($db, "SELECT * FROM latest WHERE title ='$ns'");
    $cov = "";
 	$title = "";
 	$con ="";
 while ($ro = mysqli_fetch_array($q1)){
 	$cov = $ro['cover'];
 	$title = $ro['title'];
 	$con = $ro['content'];
 	?>
 	<tr><td style="text-align:center;padding-top:30x;padding-bottom:30px;text-shadow:gray 2px 2px 1px"><font face="candara" size="6" color="maroon"><b>[NEWS] <?php echo $title; ?></b></font></td></tr>
 	<tr>
 	<td style="width:60vw;height:57vw;text-align:center;padding-bottom:30px">
 	<img title="<?php echo $title; ?>" src="<?php echo $cov; ?>" style="height:98%;width:100%;border-radius:20px">
 	</td>
 	</tr>
 	<tr><td style="text-align:justify;white-space:pre-wrap;background-color:white;border-radius:30px"><font face="candara" size="5"><?php echo $con; ?></font></td></tr>
<?php
}
?>
</table>
</center>
</body>
</html>
<?php
 if (isset($_POST['naijafo6_news'])){
   @session_start();
   $_SESSION['naijafo6_news'] = $_POST['naijafo6_news'];
   echo '<script>window.location.replace("Reader.php");</script>';
  }
?>