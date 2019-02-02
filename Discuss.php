<?php
    @session_start();
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
 	$tp = $_SESSION['top'];
    $client = $_SESSION['client'];
    $dx = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_messages');
    $qx = mysqli_query($dx, "SELECT * FROM t".$tp."_views WHERE viewer = '$client'");
    $cnt = mysqli_num_rows($qx);
    if ($cnt == 0){
      $q = mysqli_query($dx, "INSERT INTO t".$tp."_views(viewer) VALUES('$client')");
    }
    else{
    }
?>
<html>
<head><title>Discussion Forum</title></head>
<meta name= "viewport" content= "user-scalable=0,width=device-width,initial-scale=0.45">
<?php
 $dy = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $qy = mysqli_query($dy, "SELECT * FROM topics WHERE id = '$tp'");
 $hs = "";
 $tit = "";
 $pic = "";
 $type="";
 while ($ro = mysqli_fetch_array($qy)){
   $host = $ro['Host'];
   $tit = $ro['Title'];
   $query = mysqli_query($dy, "SELECT * FROM members WHERE Email_phone = '$client'");
   while($row = mysqli_fetch_array($query)){
     $pic = $row['Profile_pic'];
     $type = $row['Type'];
     $nm = $row['Name'];
   }
 }
?>
<body style="margin:0" onload="var k = document.getElementById('pg'); k.scrollTop = k.scrollHeight;">
<div style="position:absolute;opacity:0.8;width:100%;height:80%;overflow-y:auto" id = "pg">
<table style="padding-top:150px;padding-bottom:20px;width:100%;padding-left:30px;padding-right:30px">
<?php
  $q = mysqli_query($dx, "SELECT * FROM t".$tp."_comm");
  $sen = "";
  $mess = "";
  $spic = "";
  $nam = "";
  $tp = "";
  while ($rz = mysqli_fetch_array($q)){
     $sen = $rz['client'];
     $mess = $rz['comment'];
     $qr = mysqli_query($dy, "SELECT * FROM members WHERE Email_phone='$sen'");
     while ($rr = mysqli_fetch_array($qr)){
        $spic = $rr['Profile_pic'];
        $nam = $rr['Name'];
        $tp = $rr['Type'];
     }?>
    <tr><td rowspan="2" style= "width:80px"><img src="<?php echo $spic; ?>" style="width:80px;height:80px;border-radius:50px;border:3px solid
    <?php
     if ($tp == "regular"){
        echo 'cornflowerblue';
     }
     else{
        echo 'gold';
     }
    ?>"></td>
    <td style= "height:28px;font-weight:bold;font-family:candara;font-size:25px"><?php echo $nam; ?></td>
    </tr>
    <tr><td style= "white-space:pre-wrap;font-family:candara;font-size:22px;border-bottom:3px solid lightgray"><font face="candara" size="5"><?php echo $mess; ?></font></td>
  <?php
  }
?>
</table>
</div>
<div style="position:absolute;top:80%;height:20%;width:100%;background-color:lightgray">
<table style="width:100%;height:100%">
    <form action = "Discuss.php" method="post">
    <tr><td style="padding-left:50px;width:85%"><textarea name="message" maxlength="490" style="padding-left:20px;padding-top:5px;padding-bottom:5px;padding-right:20px;height:80%;width:100%;border-radius:20px;font-family:candara;font-size:3vh"></textarea></td>
        <td><button type="submit" name="send" style="font-family:candara;background-color:tomato;font-size:25px;color:white;font-weight:bold;border-radius:10px;cursor:hand">Comment</button></td></tr>
    </form>
</table>
</div>
<div class= "msg-wgt-header" style="width:100%;height:100px;background-color:tomato;position:absolute">
<table style="height:100%;width:100%">
<?php
  @session_start();
  $tp = $_SESSION['top'];
  $du = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  $q = mysqli_query($du, "SELECT * FROM topics WHERE id = '$tp'");
  $h = "";
  $p = "";
  $pics = "";
  $na = "";
  $ttp = "";
  while ($ru = mysqli_fetch_array($q)){
    $h = $ru['Host'];
    $qu = mysqli_query($du, "SELECT * FROM members WHERE Email_phone = '$h'");
    while ($rru = mysqli_fetch_array($qu)){
      $pics = $rru['Profile_pic'];
      $na = $rru['Name'];
      $ttp = $rru['Type'];
    }
  }
?>
<tr><td style="width:80px" rowspan="2"><img src="<?php echo $pics; ?>" style="width:80px;height:80px;border-radius:50%;border:
4px solid 
<?php
 if ($ttp == "regular"){
   echo 'cornflowerblue';
 }
 else{
    echo 'gold';
 }
?>"></td><td style="font-family:candara;font-size:25px;color:white;font-weight:bold;white-space:pre-wrap">   <?php echo $tit; ?></td><td style="width:5%;text-align:right" rowspan="2"><button style="background-color:white;border-radius:20px;color:tomato;font-weight:bold;font-size:5vh" onclick="window.location.replace('Discussions.php');">&times;</button></td></tr>
<tr><td colspan="2" style="font-family:candara;font-size:20px;color:white;font-weight:bold;padding-left:80px">Posted By: <?php echo $na; ?></td></tr>
</table>
</div>
</body>
</html>
<?php
 if (isset($_POST['send'])){
    @session_start();
    $tp = $_SESSION['top'];
    $client = $_SESSION['client'];
    $mesg = $_POST['message'];
    if ($mesg == ""){
    echo '<script>alert("You cannot send a blank message");</script>';
    }else{
    $msg = str_replace("'","''",$mesg);
    $qz = mysqli_query($dx, "INSERT INTO t".$tp."_comm (client, comment) VALUES('$client','$msg')");
    echo '<script>window.location.replace("Discuss.php");</script>';
    }
 }
?>