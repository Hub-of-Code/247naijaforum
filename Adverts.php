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
<html><head><title>Adverts</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
<div style="position:absolute;height:100%;width:100%;top:0;overflow-y:auto;max-height:100%">
<div style="position:relative;top:7vh;width:100%;height:150px;background-color:lightgray">
<table>
<form action="Adverts.php" method="post">
<tr><td><img src="<?php echo $pict; ?>" style="width:120px;height:120px;border-radius:50%;border:3px solid 
<?php
 if ($type=="regular"){
  echo 'cornflowerblue';
 }
 else{
  echo 'gold';
 }  ?>"></td>
<td><button type="submit" name="submit" style="color:tomato;border-radius:10px;background-color:white;border:3px solid tomato
 ;font-size:20px;font-family:candara;font-weight:bold;cursor:hand">Advertise Product</button></td>
</tr>
</form>
</table>
</div>
<div style="position:relative;top:10vh;width:100%">
<center>
<table style="width:80vw">
<?php
  $d = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
  $qq = mysqli_query($d, "SELECT * FROM adverts ORDER BY id DESC");
  while ($r = mysqli_fetch_array($qq)){ 
  $id = $r['id'];
  $hs = $r['Host'];
  $des = $r['Description'];
  $i1 = $r['FrontView'];
  $i2 = $r['BackView'];
  $i3 = $r['LeftView'];
  $i4 = $r['RightView'];
  $pr = $r['Price'];
  $n = $r['Name'];
  $bus = $r['Business'];
  $cover = "";
  $own = "";
  if ($bus == "false"){
     $dd = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
     $qr = mysqli_query($dd, "SELECT * FROM members WHERE Email_phone = '$hs'");
     while ($rr = mysqli_fetch_array($qr)){
      $own = $rr['Name'];
      $cover = $rr['Profile_pic'];
      ?>
       <tr><td colspan="2"><img src="<?php echo $cover; ?>" style="width:100px;height:100px;border-radius:50%"><input type="button" style="font-family:candara;font-size:25px;position:relative;top:-40px;left:10px;font-weight:bold;background-color:transparent;border:0" value="<?php echo $own; ?>"><input type="button" style="font-family:candara;font-size:22px;position:relative;top:-40px;left:6px;font-weight:bold;border:0;background-color:transparent" value=" Sponsored">
       </td>
    </tr>
    <tr><td colspan="2" style="text-align:center"><pre><font face="candara" size="5"><b>[FOR SALE]: </b></font><font face="candara" size="5" color="tomato"><b><?php echo $n; ?></b></font></pre></td></tr>
    <tr><td><img src="<?php echo $i1; ?>" style="width:40vw;height:40vw"></td><td><img src="<?php echo $i2; ?>" style="width:40vw;height:40vw"></td></tr>
    </tr>
    <tr><td><img src="<?php echo $i3; ?>" style="width:40vw;height:40vw"></td><td><img src="<?php echo $i4; ?>" style="width:40vw;height:40vw"></td></tr>
    <tr><td colspan="2"><hr></hr></td></tr>
     <tr><td colspan="2" style="text-align:center"><pre><b><font face="candara" size="6">Description</font></b></pre></td></tr>
     <tr><td colspan="2"><pre><font face="candara" size="5"><b><?php echo $des; ?></b></font></pre></td></tr>
    <tr><td colspan="2" style="text-align:center"><font face="candara" size="5"><b>Buy Now at <strike>N</strike><?php echo $pr; ?> Only</b></font></td></tr>
    <tr><td colspan="2" style="text-align:right"><font face="candara" size="5" color="cornflowerblue"><b>Contact <?php echo $hs; ?> for more Info</b></font></td></tr>
    
    <?php
     }
  }
  else{
     $own = $r['Business'];
     $dd = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
     $qr = mysqli_query($dd, "SELECT * FROM businesses WHERE names = '$bus'");
     while ($rr = mysqli_fetch_array($qr)){
        $cover = $rr['covers']; ?>
       <tr><td colspan="2"><img src="<?php echo $cover; ?>" style="width:100px;height:100px;border-radius:50%"><input type="button" style="font-family:candara;font-size:25px;position:relative;top:-40px;left:10px;font-weight:bold;background-color:transparent;border:0" value="<?php echo $own; ?>"><input type="button" style="font-family:candara;font-size:22px;position:relative;top:-40px;left:6px;font-weight:bold;border:0;background-color:transparent" value=" Sponsored">
       </td>
    </tr>
    <tr><td colspan="2" style="text-align:center"><pre><font face="candara" size="5"><b>[FOR SALE]: </b></font><font face="candara" size="5" color="tomato"><b><?php echo $n; ?></b></font></pre></td></tr>
    <tr><td><img src="<?php echo $i1 ?>" style="width:40vw;height:40vw"></td><td><img src="<?php echo $i2; ?>" style="width:40vw;height:40vw"></td></tr>
    </tr>
    <tr><td><img src="<?php echo $i3; ?>" style="width:40vw;height:40vw"></td><td><img src="<?php echo $i4; ?>" style="width:40vw;height:40vw"></td></tr>
    <tr><td colspan="2"><hr></hr></td></tr>
    <tr><td colspan="2" style="text-align:center"><pre><b><font face="candara" size="6">Description</font></b></pre></td></tr>
    <tr><td colspan="2" style="white-space:pre-wrap"><font face="candara" size="5"><?php echo $des; ?></font></td></tr>
    <tr><td colspan="2" style="text-align:center"><font face="candara" size="5"><b>Buy Now at <strike>N</strike><?php echo $pr; ?> Only</b></font></td></tr>
    <tr><td colspan="2" style="text-align:right"><font face="candara" size="5" color="cornflowerblue"><b>Contact <?php echo $hs; ?> for more Info</b></font></td></tr>
    <?php
     }
  }
  }
  ?>
</table>
</center>
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
 <td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Adverts.php';">Adverts</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Jobs.php';">Jobs</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Businesses.php';">Business</button>
</td>
<td style="width:25%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Home.php';">Back</button>
</td>
</tr>
<?php
 }
 else{ ?>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Adverts.php';">Adverts</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location='Jobs.php';">Jobs (VIP)</button>
</td>
<td style="width:20%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Businesses.php';">Business</button>
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
    echo '<script>window.location.replace("New Advert.php");</script>';
   }
  }
?>