<?php
 @session_start();
 $buss = $_SESSION['buss'];
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
<title>About Us</title></head>
<body style="margin:0">
<a href="Businesses.php"><font color="maroon" size="5" face="candara">Back</font></a>
<center>
<table style="padding-top:5vh;width:70%" cellspacing="0">
<?php
 $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $q1 = mysqli_query($db, "SELECT * FROM businesses WHERE id ='$buss'");
 $own = "";
 $nm = "";
 $des = "";
 $pic = "";
 $clnm = "";
 $clpic = "";
 $clem = "";
 $cltp = "";
 while ($ro = mysqli_fetch_array($q1)){
 	$own = $ro['owners'];
 	$nm = $ro['names'];
 	$des = $ro['description'];
 	$pic = $ro['covers'];
 	$q2 = mysqli_query($db, "SELECT * FROM members WHERE Email_phone = '$own'");
 	while ($ro2 = mysqli_fetch_array($q2)){
 		$clnm = $ro2['Name'];
 		$clpic = $ro2['Profile_pic'];
 		$clem = $ro2['Email_phone'];
 		$cltp = $ro2['Type'];
 	} ?>
 	<tr>
 	<td style="width:60vw;height:55vw;text-align:center" colspan="2">
 	<img title="<?php echo $nm; ?>" src="<?php echo $pic; ?>" style="height:80%;width:80%;border-radius:20px">
 	</td>
 	</tr>
 	<tr><td style="font-family:constantia;font-size:18px;font-weight:bold;text-align:right;width:70%"><font color="maroon" face="candara" size="5">Founder: </font><font face="candara" size="5"><?php echo $clnm; ?></font></td><td style="height:50px;width:70px;text-align:center"><img src="<?php echo $clpic; ?>" style="height:50px;width:50px;border-radius:50%;border:3px solid <?php
 	  if ($cltp = "regular"){
 	  	echo 'cornflowerblue';
 	  }
 	  else{
 	  	echo 'gold';
 	  }
 	?>">
 	<tr><td colspan="2" style="padding-top:30px;padding-bottom:10px;text-align:center"><font face="candara" size="6"><b>About <?php echo $nm; ?></b></font></td></tr>
    </td></tr><td colspan="2" style="padding-left:40px;padding-top:20px;padding-bottom:20px;padding-right:40px;background-color:white;border-radius:30px;white-space:pre-wrap"><font face="candara" size="5"><?php echo $des; ?></font></td></tr>
    <tr><td colspan="2" style="text-align:right;padding-top:20px"><font face="candara" color="maroon" size="4"><b>Contact <?php echo $clem; ?> for more details.</b></td></tr>
  <?php
}
?>
</table>
</center>
</body>
</html>