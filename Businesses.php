<?php
  @session_start();
  if (!isset($_SESSION['client'])){
  	echo '<script>window.location.replace("index.php");</script>';
  }
  $client = $_SESSION['client'];
  $type = $_SESSION['accounttype'];
  $pict = "";
  $di = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  $qi = mysqli_query($di,"SELECT Profile_pic FROM members WHERE Email_phone = '$client'");
  while ($ri = mysqli_fetch_array($qi)){
    $pict = $ri['Profile_pic'];
  }
?>
<html><head><title>Business</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
<div style="position:absolute;height:100%;width:100%;top:0;overflow-y:auto;max-height:100%">
<div style="position:relative;top:7vh;width:100%;height:150px;background-color:lightgray">
<table>
<form action="Businesses.php" method="post">
<tr><td><img src="<?php echo $pict; ?>" style="width:120px;height:120px;border-radius:50%;border:3px solid 
<?php
 if ($type=="regular"){
  echo 'cornflowerblue';
 }
 else{
  echo 'gold';
 }  ?>"></td>
<td><button type="submit" name="submit" style="color:tomato;border-radius:10px;background-color:white;border:3px solid tomato
 ;font-size:20px;font-family:candara;font-weight:bold;cursor:hand">Register New Business</button></td>
</tr>
</form>
</table>
</div>
<?php
 $dtable = '<center><table cellspacing="10">';
 $dz = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $qz = mysqli_query($dz,"SELECT * FROM businesses ORDER BY id DESC");
 $i = 0;
 while ($rz = mysqli_fetch_array($qz)){
  $own = $rz['owners'];
  $cov = $rz['covers'];
  $nm = $rz['names'];
  $id = $rz['id'];
  $nam = "";
  $emp = "";
  $qq = mysqli_query($dz, "SELECT * FROM members WHERE Email_phone = '$own'");
  while ($rqq = mysqli_fetch_array($qq)){
    $nam = $rqq['Name'];
    $emp = $rqq['Email_phone'];
  }
  if ($i % 3 == 0){
      $dtable.= '<tr><td style="font-size:25px;width:30vw;height:30vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button title= "'.$nam.'" type="submit" name = "buss" style="border-radius:20px;border:0;cursor:hand;background-color:transparent" value="'.$id.'"><img src="'.$cov.'" style="height:25vw;width:30vw;border-radius:20px"></button></td></tr><tr><td style="font-family:candara;font-size:30px;font-weight:bold;text-align:center;padding-top:10px;color:maroon;text-shadow:gray 2px 2px 1px">'.$nm.'</td></tr><tr><td style="font-family:candara;font-size:18px;font-weight:bold;text-align:right"><font face="candara" size="4" color="maroon"><b>Contact: </b></font>'.$emp.'</td></tr></table></div></td>';
  }else{
      $dtable.= '<td style="font-size:25px;width:30vw;height:30vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button title= "'.$nam.'" type="submit" name = "buss" style="border-radius:20px;border:0;cursor:hand;background-color:transparent" value="'.$id.'"><img src="'.$cov.'" style="height:25vw;width:30vw;border-radius:20px"></button></td></tr><tr><td style="font-family:candara;font-size:30px;font-weight:bold;text-align:center;padding-top:10px;color:tomato;text-shadow:gray 2px 2px 1px">'.$nm.'</td></tr><tr><td style="font-family:candara;font-size:18px;font-weight:bold;text-align:right"><font face="candara" size="4" color="maroon"><b>Contact: </b></font>'.$emp.'</td></tr></table></div></td>';
  }
  $i++;
 }
 $dtable.= "</tr></table></center>";
?>
<div style="position:relative;top:10vh;width:100%">
<form action = "Businesses.php" method= "post">
<?php echo $dtable; ?>
</form>
</div>
</div>
<div style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px;box-shadow:0 10px 6px -6px gray;opacity:0.6">
</div>
<table style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px">
<tr>
<?php
 @session_start();
 $cl = $_SESSION['client'];
 $tp = "";
 $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $q = mysqli_query($db, "SELECT Type FROM members WHERE Email_phone = '$cl'");
 while ($ro = mysqli_fetch_array($q)){
  $tp = $ro['Type'];
 }
 if ($tp == "vip"){ ?>
 <td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Adverts.php';">Adverts</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Jobs.php';">Jobs</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Businesses.php';">Business</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Home.php';">Back</button>
</td>
</tr>
<?php
 }
 else{ ?>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Adverts.php';">Adverts</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Jobs.php';">Jobs (VIP)</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Businesses.php';">Business</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Upgrade.php';">Upgrade</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Home.php';">Back</button>
</td>
</tr>
 <?php
 }
?>
</table>
</body>
</html>
<?php
  if (isset($_POST['submit'])){
   @session_start();
   $cl = $_SESSION['client'];
   $tp = "";
   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
   $q = mysqli_query($db, "SELECT Type FROM members WHERE Email_phone = '$cl'");
   while ($ro = mysqli_fetch_array($q)){
     $tp = $ro['Type'];
    }
   if ($tp == "regular"){
    echo '<script>alert("You must get a VIP account to access this feature!");</script>';
   }
   else{
    echo '<script>window.location.replace("New Business.php");</script>';
   }
  }
  if (isset($_POST['buss'])){
   @session_start();
   $_SESSION['buss'] = $_POST['buss'];
   echo '<script>window.location.replace("About.php");</script>';
  }
?>