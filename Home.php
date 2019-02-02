<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>247Naija Front Page</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0;background-image:linear-gradient(60deg, #f2f2f2, #e6e6e6)">
<div style="position:absolute;height:100%;width:100%;top:0;overflow-y:auto;max-height:100%">
<div style="position:relative;top:7vh;width:100%;height:20vh;overflow-x:auto">
<table style="height:100%;padding-left:20px;padding-right:20px">
<form action= "Home.php" method="post">
<tr>
<?php
 $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $q1 = mysqli_query($db1, "SELECT * FROM members ORDER BY ID ASC");
 $pic = "";
 $ac = "";
 while ($ro = mysqli_fetch_array($q1)){ 
 	$pic = $ro['Profile_pic'];
 	$ac = $ro['Type'];
 	$id = $ro['id'];
  $cont = $ro['Email_phone'];
   ?>
  <td style="width:10vh;text-align:center"><button type= "submit" name="view" value = "<?php echo $id; ?>" style="background-color:transparent;border:0"><img title= "<?php echo 'Contact: '.$cont; ?>" src="<?php echo $pic; ?>" style="width:10vh;cursor:hand;height:10vh;border-radius:50%;border:5px solid <?php
  if ($ac == "regular"){
  	echo 'cornflowerblue';
  }else{
  	echo 'gold';
  }
  ?>"></button></td>
 <?php
 }
?>
</tr>
<tr>
 <?php
 $q2 = mysqli_query($db1, "SELECT * FROM members ORDER BY ID ASC");
 $nm = "";
 while ($ro = mysqli_fetch_array($q2)){
 	$nm = $ro['Name'];
 ?>
  <td style="font-family:candara;font-size:2vh;width:10vh;text-align:center;font-weight:bold"><?php echo $nm; ?></td>
 <?php
 }
 ?>
</tr>
</form>
</table>
</center>
</div>
<div style="float:left;width:60%;position:relative;top:7vh;padding-bottom:40px">
<center><table style="padding-top:10px;width:100%">
  <tr><td style="text-align:center;text-shadow:gray 2px 2px 1px;padding-top:45px" colspan="3"><font face="candara" size="6" color="maroon"><b>Latest Discussions</b></font></td></tr>
</table></center>
<center><table style="padding-left:2px;padding-top:10px;padding-bottom:20px;width:95%;background-color:lightgray;border-radius:20px;position:relative;top:20px">
  <form action="Discussions.php" method = "post">
  <?php
     $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
     $q = mysqli_query($db,"SELECT * FROM topics ORDER BY id DESC LIMIT 15");
     $cn1 = 0;
     while ($ro = mysqli_fetch_array($q)){
    $cn1++;
     if (cn1 !=15){
      $topic = $ro['Title'];
      $mt = "";
      if (strlen($topic)<=35){
        $mt = $topic;
      }
      else{
        $tt = substr($topic,0,33);
        $mt = $tt." ...";
      }
      $id = $ro['id'];
      $hst = $ro['Host'];
      ?>
      <tr>
      <td style="width:80px;height:80px;" rowspan="2"><img src="247Naija.png" style="height:100%;width:100%;border-radius:50%;background-color:tomato"></td>
      <td colspan="2"><font face="candara" size="5" color="brown"><b>
      <button type="submit" title= "Contact: <?php echo $hst; ?>" name="top" value="<?php echo $id; ?>" type="submit" style="width:100%;height:45px;text-align:left;border:0;background-color:lightgray;font-weight:bold;font-size:25px;color:brown;cursor:hand;"><?php echo $mt; ?></button>
      </b></td>
      </tr>
      <tr>
      <td style="padding-top:5px;text-shadow:gray 2px 2px 1px;<?php if ($cn1 != 15) { echo 'border-bottom:2px solid gray';} ?>"><font face="candara" size="4"><b>
      <?php
       $dt1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_messages');
       $qt1 = mysqli_query($dt1, "SELECT * FROM t".$id."_views");
       $num1 = mysqli_num_rows($qt1);
       echo "&#128065; ".$num1;
      ?>
      </b></td>
      <td  style="padding-top:5px;text-shadow:gray 2px 2px 1px;<?php if ($cn1 != 15) { echo 'border-bottom:2px solid gray';} ?>"><font face="candara" size="4"><b>
      <?php
       $dt2 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_messages');
       $qt2 = mysqli_query($dt2, "SELECT * FROM t".$id."_comm");
       $num2 = mysqli_num_rows($qt2);
       echo "&#128172; ".$num2;
      ?>
      </b></td>
      </tr>
      <?php
     }
     else{ ?>
     
     <?php
     }
      }
  ?>
</form>
</table>
</center>
</div>
<div style="float:right;width:40%;position:relative;top:7vh">
<center><table style="padding-top:10px;width:90%">
  <tr><td style="text-align:center;text-shadow:gray 2px 2px 1px;padding-top:45px"><font face="candara" size="6" color="maroon"><b>Recent Businesses</b></font></td></tr>
</table>
<center>
<center><table style="padding-top:10px;width:85%;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom:5px;position:relative;top:5px">
<form action="Home.php" method="post">
<?php
  $q3 = mysqli_query($db1, "SELECT * FROM businesses LIMIT 5");
  while ($row = mysqli_fetch_array($q3)){
  	$nam = $row['names'];
  	$ph = $row['covers'];
    $id = $row['id'];
  	?>
   <tr>
  	<td style="text-align:center"><button type="submit" name = "buss" value="<?php echo $id; ?>" name="business" style="border:0;border-radius:20px;cursor:hand"><img src="<?php echo $ph; ?>" style="width:100%;height:200px"></button>
  	</td>
  </tr>
  <tr><td style="text-align:center;text-shadow:gray 2px 2px 1px"><font face="tahoma" size="6"><b><?php echo $nam; ?></b></font>
  	</td>
  </tr>
  <?php
  }
?>
</form>
</table>
<center>
</div>
</div>
<div style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px;box-shadow:0 10px 6px -6px gray;opacity:0.6">
</div>
<table style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px">
<tr>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Home.php'">Home</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Seminars.php'">Seminars</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Discussions.php';">Discussions</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'News.php';">News</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Adverts.php'">Extras</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;cursor:hand;color:white" onclick="window.location = 'Search.php'">Search</button>
</td>
</tr>
</table>
</body>
<script type="text/javascript">
var infolinks_pid = 3151534;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
</html>
<?php
  if (isset($_POST['buss'])){
   @session_start();
   $_SESSION['buss'] = $_POST['buss'];
   echo '<script>window.location.replace("About.php");</script>';
  }
  if (isset($_POST['view'])){
  	@session_start();
  	$_SESSION['contact'] = $_POST['view'];
    echo '<script>window.location.replace("View Account.php");</script>';
  }
?>