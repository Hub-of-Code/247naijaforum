<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Profile</title></head>
<meta name="viewport" content = "user-scalable=0,initial-scale=0.6">
<body style="margin:0;background-image:linear-gradient(60deg, white, lightgray)">
<?php
  @session_start();
  $ids = $_SESSION['contact'];
  $cl = $_SESSION['client'];
  $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  $q1 = mysqli_query($db1, "SELECT * FROM members WHERE id = '$ids'");
  $cov = "";
  $nam = "";
  $em = "";
  $tp = "";
  $gen = "";
  $dis = "";
  $vis = "";
  $ctop = "";
  $csem = "";
  $i = "";
  while ($r1 = mysqli_fetch_array($q1)){
  	$cov = $r1['Profile_pic'];
  	$nam = $r1['Name'];
  	$em = $r1['Email_phone'];
  	 $dis = mysqli_query($db1, "SELECT * FROM topics WHERE Host = '$em'");
     $ctop = mysqli_num_rows($dis);
     $sem = mysqli_query($db1, "SELECT * FROM seminars WHERE Host = '$em'");
     $csem = mysqli_num_rows($sem);
  	$tp = $r1['Type'];
  	$gen = $r1['Gender'];
    $i = $r1['id'];
  	if ($cl == $em){
  	$dis = "My Profile";
    }
    else{
  	$dis = "User Profile";
    }
  }
?>
<div style="width:100%;padding-top:40px">
<pre>   <a href="Home.php"><font face="candara" size="4" color="cornflowerblue"><b>Back to Home</b></font></a></pre>
<form action ="View Account.php" method="post" enctype="multipart/form-data">
<p align="center"><font face="candara" size="6" color="tomato"><b><?php echo $dis; ?></b></font></p>
<p align="center"><img id = "ima" title = "<?php echo $nam; ?>" src = "<?php echo $cov; ?>" style="width:200px;height:200px;border-radius:50%;border:4px solid 
<?php
  if ($cl == "regular"){
  	echo 'cornflowerblue';
  }
  else{
  	echo 'gold';
  }
?>"></p>
<?php
  if ($cl == $em){ ?>
    <p align="center"><button type="button" style="font-family:candara;color:white;background-color:tomato;font-size:25px;font-weight:bold;padding-left:10px;padding-right:10px;border-radius:20px;border:0">Change Photo</button></p><p align="center" style="position:relative;top:-60px"><input type="file" name="upload" style="width:200px;height:60px;opacity:0;" onchange="document.getElementById('ima').src= window.URL.createObjectURL(this.files[0]);document.getElementById('ch').style.visibility= 'visible'"></p>
  <?php
  }
  else{ ?>

  <?php
  }
?>
<p align="center" style="<?php if ($cl == $em){ echo 'position:relative;top:-60px'; }else{ echo 'position:relative;top:-60px;padding-top:65px'; }?>"><font face="candara" size="5"><b>
<?php
 if ($cl == $em){ ?>
 	<?php echo $nam; ?> @ </b></font><font face="candara" size="5" color="cornflowerblue"><b><?php echo $i; ?></b></font>
 <?php
 }
 else{ ?>
 	<?php echo $nam; ?></b></font>
 <?php
 }
?>
</p>
<p align="center" style="padding-top:10px;position:relative;top:-60px"><font face="candara" size="5"><b>Contact: </b></font><font face="candara" size="5" color="cornflowerblue"><b><?php echo $em; ?></b></font></p>
<p align="center" style="padding-top:10px;position:relative;top:-60px"><font face="candara" size="5"><b>Gender: <?php echo $gen; ?></b></font></p>
<p align="center" style="padding-top:20px;position:relative;top:-60px"><b><font color="green" face="tahoma" size="4">Posts: </font><font size="4" face="tahoma"><?php echo $ctop; ?></font></b>
<p align="center" style="position:relative;top:-60px;"><b><font color="green" face="tahoma" size="4">Articles: </font><font size="4" face="tahoma"><?php echo $csem; ?></font></b></p>
<p align = "center" style="position:relative;top:-60px;"><input type="submit" name="submit" style="font-family:candara;color:tomato;background-color:white;font-size:25px;font-weight:bold;padding-left:10px;padding-right:10px;border-radius:20px;border:3px solid tomato;visibility:hidden" value="Save Changes" id="ch"></p>
</p>
</div>
</body>
</html>
<?php
 @session_start();
 $id = $_SESSION['contact'];
 if (isset($_POST['submit'])){
  if (isset($_FILES['upload'])){
   $filename = $_FILES['upload']['name'];
   $file_tmp_name = $_FILES['upload']['tmp_name'];
   $fl = "Profile Pics/".$filename;
   move_uploaded_file($file_tmp_name, $fl);
   $db2 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
   $q = mysqli_query($db2, "UPDATE members SET Profile_pic = '$fl' WHERE id = '$id'");
   echo '<script>window.location.replace("View Account.php");</script>';
  }
 }
?>