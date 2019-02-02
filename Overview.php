<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Job Overview</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.45">
<body style="margin:0">
<?php
  $cov = "";
  $nm = "";
  $doc1 = "";
  $doc2 = "";
  $add = "";
  $em = "";
  $ph = "";
  $st = "";
  $lga = "";
  $des = "";
  $id = "";
  if (isset($_POST['submit'])){
  	$id = $_POST['submit'];
    $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
    $q1 = mysqli_query($db1, "SELECT * FROM jb WHERE id = '$id'");
    while ($r1 = mysqli_fetch_array($q1)){
       $cov = $r1['cover_photo'];
       $nm = $r1['company_name'];
       $doc1 = $r1['document'];
       $add = $r1['company_address'];
       $em = $r1['company_email'];
       $ph = $r1['company_phone'];
       $st = $r1['company_state'];
       $lga = $r1['company_lga'];
       $des = $r1['company_description'];
    }
  }
?>
<div style="position:absolute;left:10vw;top:5vh;width:80vw;padding-top:20px;padding-bottom:40px;background-image:linear-gradient(60deg, white, lightgray);overflow-y:auto;border-radius:30px">
<table style="width:100%;padding-left:20px;padding-right:20px">
  <tr><td style="text-align:right;padding-right:10px"><input type="button" style="font-family:candara;font-size:35px;color:cornflowerblue;font-weight:bold;background-color:white;border:3px solid tomato;cursor:hand;border-radius:50%;color:tomato" value="X" onclick="window.location.replace('247Approve.php');"></td></tr>
  <tr><td style="text-align:center;padding-bottom:50px"><img src="<?php echo $cov; ?>" style="width:30vw;height:30vw;border-radius:30px;background-color:transparent"></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Name: </b></font><font face="candara" size="5"><?php echo $nm; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Email: </b></font><font face="candara" size="5" color="cornflowerblue"><?php echo $em; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Phone (s): </b></font><font face="candara" size="5"><?php echo $ph; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Address: </b></font><font face="candara" size="5"><?php echo $add; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company L.G.A: </b></font><font face="candara" size="5"><?php echo $lga; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company State: </b></font><font face="candara" size="5"><?php echo $st; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Description:</b></font></td></tr>
  <tr><td style="padding-bottom:30px;padding-left:30px;padding-right:30px"><font face="candara" size="5"><?php echo $des; ?></font></td></tr>
  <tr><td style="text-align:center"><font face="candara" size="5"><a href = "<?php echo $doc1; ?>" style="padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;border-radius:20px">View Corporate Affairs Certificate</a></td></tr>
  <tr><form action = "mailto:<?php echo $em; ?>" method="post">
  <tr><td style="text-align:center;padding-top:30px;padding-bottom:30px"><button type="submit" style="cursor:hand;font-family:tahoma;font-size:24px;border-radius:10px;padding-left:10px;padding-left:10px;padding-right:10px;font-weight:bold;background-color:black;color:tomato;border-radius:15px;border:3px solid tomato">Send Mail</button></td>
  </form>
  </tr>
  <form action ="Overview.php" method = "post">
  <tr><td style="text-align:center;padding-top:30px"><pre><button type="submit" name="approve" style="cursor:hand;font-family:tahoma;font-size:24px;border-radius:10px;padding-left:10px;padding-left:10px;padding-right:10px;font-weight:bold;background-color:white;color:tomato;border-radius:15px;border:3px solid tomato" value="<?php echo $id; ?>">Approve</button>       <button type="submit" name="disapprove" value="<?php echo $id; ?>" style="cursor:hand;font-family:tahoma;font-size:24px;border:3px solid tomato;border-radius:10px;padding-left:10px;padding-left:10px;padding-right:10px;font-weight:bold;background-color:tomato;color:white;border-radius:15px">Disapprove</button></pre></td></tr>
  </form>
</table>
</div>
</body>
</html>
<?php
   if (isset($_POST['approve'])){
   	 $id = $_POST['approve'];
   	 $dbx = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
   	 $qx = mysqli_query($dbx, "UPDATE jb SET approved = 'true' WHERE id = $id");
   	 echo '<script>window.location.replace("247Approve.php");</script>';
   }
   if (isset($_POST['disapprove'])){
   	 $id = $_POST['disapprove'];
   	 $dbx = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
   	 $qx = mysqli_query($dbx, "DELETE FROM jb WHERE id = $id");
   	 echo '<script>window.location.replace("247Approve.php");</script>';
   }
?>