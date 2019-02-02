<?php
 @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
 $sem = $_SESSION['sem'];
?>
<html>
<head><title>Read Article</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0;background-color:lemonchiffon">
<center>
<table style="padding-top:5%;width:80%;padding-bottom:40px" cellspacing="0">
<?php
 $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $q1 = mysqli_query($db, "SELECT * FROM seminars WHERE id='$sem'");
 $pic = "";
 $nm = "";
 $cont = "";
 while ($ro = mysqli_fetch_array($q1)){
 	$num = $ro['Host'];
 	$top = $ro['Title'];
 	$bod = $ro['content'];
 	$q2 = mysqli_query($db, "SELECT * FROM members WHERE Email_phone = '$num'");
 	while ($ro2 = mysqli_fetch_array($q2)){
 		$nm = $ro2['Name'];
 		$pic = $ro2['Profile_pic'];
 		$cont = $ro2['Email_phone'];
 		$tp = $ro2['Type'];
 	}
 	?>
 	<tr>
 	<td style="width:100px;height:100px">
 	<img src="<?php echo $pic; ?>" style="height:100%;width:100%;border-radius:50%;border:4px solid 
 	<?php
 	  if ($tp = "regular"){
 	  	echo 'cornflowerblue';
 	  }
 	  else{
 	  	echo 'gold';
 	  }
 	?>">
 	</td><td style="white-space:pre-wrap"><b><font face="candara" size="6">   <?php echo $top; ?></font></b></td><td><button style="background-color:tomato;border-radius:20px;color:white;font-weight:bold;font-size:5vh" onclick="window.location.replace('Seminars.php');">X</button></td>
 	</tr>
 	<tr><td></td><td style="white-space:pre-wrap;padding-left:25px;padding-top:30px;padding-bottom:30px;padding-right:25px;background-color:white;border-top-right-radius:20px;border-top-left-radius:20px"><font face="candara" size="5"><?php echo $bod; ?></font></td></tr>
 	<tr><td></td><td style="text-align:right;background-color:white;padding-right:30px"><b><font face="candara" size="5" color="maroon">Written By: </font><font face="candara" size="5"><?php echo $nm; ?></font></b></td>
 	<tr><td></td><td style="text-align:right;background-color:white;padding-bottom:30px;padding-right:30px;border-bottom-right-radius:20px;border-bottom-left-radius:20px"><b><font face="candara" size="5" color="maroon">Contact: </font><font face="candara" size="5"><?php echo $cont; ?></font></b></td>
 	<?php
 }
?>
</table>
</center>
</body>
<script type="text/javascript">
var infolinks_pid = 3151534;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
</html>