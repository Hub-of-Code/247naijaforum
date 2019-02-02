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
<html><head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9246236177173933",
          enable_page_level_ads: true
     });
</script>
<title>Seminars</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
<div style="position:absolute;height:100%;width:100%;top:0;overflow-y:auto;max-height:100%">
<div style="position:relative;top:7vh;width:100%;height:150px;background-color:lightgray">
<table>
<form action="Seminars.php" method="post">
<tr><td><img src="<?php echo $pict; ?>" style="width:120px;height:120px;border-radius:50%;border:3px solid 
<?php
 if ($type=="regular"){
  echo 'cornflowerblue';
 }
 else{
  echo 'gold';
 }  ?>"></td>
<td><button type="submit" name="submit" style="color:tomato;border-radius:10px;background-color:white;border:3px solid tomato
 ;font-size:20px;font-family:tahoma;font-weight:bold;cursor:hand">New Article</button></td>
</tr>
</form>
</table>
</div>
<?php
 $dtable = '<center><table cellspacing="10">';
 $dz = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
 $qz = mysqli_query($dz,"SELECT * FROM seminars ORDER BY id DESC");
 $i = 0;
 while ($rz = mysqli_fetch_array($qz)){
  $tops = $rz['Title'];
  $cl = $rz['Host'];
  $id = $rz['id'];
  $nm = "";
  $pic = "";
  $tp = "";
  $mt = "";
  if (strlen($tops)<=25){
    $mt = $tops;
  }
  else{
    $tt = substr($tops,0,22);
    $mt = $tt." ...";
  }
  $qq = mysqli_query($dz, "SELECT * FROM members WHERE Email_phone = '$cl'");
  while ($rqq = mysqli_fetch_array($qq)){
    $nm = $rqq['Name'];
    $pic = $rqq['Profile_pic'];
    $act = $rqq['Type'];
    if ($act == "regular") {
      $tp = "cornflowerblue";
    }
    else{
      $tp = "gold";
    }
  }
  if ($i % 3 == 0){
      $dtable.= '<tr><td style="font-size:25px;width:32vw;height:32vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button type="submit" name = "sem" style="box-shadow:0px 10px 6px -6px gray;text-shadow:gray 2px 2px 1px;height:80%;width:100%;font-family:elephant;font-size:22px;font-weight:bold;color:white;background-image:linear-gradient(-90deg,tomato,#ff8080);border-radius:20px;border:0;cursor:hand" value = "'.$id.'">'.$mt.'</button></td></tr><tr><td style="font-family:tahoma;font-size:18px;font-weight:bold;text-align:right"><font color="maroon" face="tahoma">Writer: </font>'.$nm.'</td><td style="height:50px;width:70px;text-align:center"><img src="'.$pic.'" style="height:50px;width:50px;border-radius:50%;border:3px solid '.$tp.'"></td></tr></table></div></td>';
  }else{
      $dtable.= '<td style="font-size:25px;width:32vw;height:32vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button type="submit" name = "sem" style="box-shadow:0px 10px 6px -6px gray;height:80%;width:100%;font-family:elephant;text-shadow:gray 2px 2px 1px;font-size:22px;font-weight:bold;color:white;background-image:linear-gradient(-90deg,tomato,#ff8080);border-radius:20px;border:0;cursor:hand" value = "'.$id.'">'.$mt.'</button></td></tr><tr><td style="font-family:tahoma;font-size:18px;font-weight:bold;text-align:right"><font color="maroon" face="tahoma">Writer: </font>'.$nm.'</td><td style="height:50px;width:70px;text-align:center"><img src="'.$pic.'" style="height:50px;width:50px;border-radius:50%;border:3px solid '.$tp.'"></td></tr></table></div></td>';
  }
  $i++;
 }
 $dtable.= "</tr></table></center>";
?>
<div style="position:relative;top:10vh;width:100%">
<form action = "Seminars.php" method= "post">
<?php echo $dtable; ?>
</form>
</div>
</div>
<div style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px;box-shadow:0 10px 6px -6px gray;opacity:0.6">
</div>
<table style="position:absolute;height:7vh;width:100%;background-color:tomato;top:0px">
<tr>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;color:white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand" onclick="window.location = 'Home.php'">Home</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid white;color:white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand" onclick="window.location = 'Seminars.php'">Seminars</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;font-family:candara;font-size:25px;font-weight:bold;color:white;cursor:hand" onclick="window.location = 'Discussions.php';">Discussions</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;color:white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand" onclick="window.location = 'News.php';">News</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;color:white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand" onclick="window.location = 'Adverts.php'">Extras</button>
</td>
<td style="width:16.6%;text-align:center"><button style="width:100%;height:100%;background-color:tomato;border:0;border-bottom:5px solid tomato;color:white;font-family:candara;font-size:25px;font-weight:bold;cursor:hand" onclick="window.location = 'Search.php'">Search</button>
</td>
</tr>
</table>
</body>
</html>
<?php
  if (isset($_POST['submit'])){
   echo '<script>window.location.replace("New.php");</script>';
  }
  if (isset($_POST['sem'])){
   @session_start();
   $_SESSION['sem'] = $_POST['sem'];
   echo '<script>window.location.replace("Read.php");</script>';
  }
  
?>