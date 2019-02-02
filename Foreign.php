<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>News</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.35">
<body style="margin:0;background-image:linear-gradient(60deg,white, lightgray)">
<div>
<div style="float:left;width:15vw;height:100%;background-color:black">
<table style="width:100%;padding-top:40px">
<tr><td style="text-align:center"><b><font color="tomato" size="4" face="cooper">Categories</font></b></td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('News.php');">Home</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Gist.php');">Gist</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Entertainment.php');">Entertainment</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Education.php');">Education</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Sports.php');">Sports</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Foreign.php');">Foreign</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Local.php');">Local</button></td>
</td></tr>
<tr><td style="text-align:center;padding-top:20px"><button style="background-color:black;border:0;border-bottom:1px solid lightgray;font-family:candara;color:white;font-size:20px;width:100%;font-weight:bold;cursor:hand" onclick="window.location.replace('Home.php');">Back</button></td>
</td></tr>
</table>
</div>
<?php
 $dtable = '<center><table style="padding-bottom:35px">';
 $dz = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
 $qz = mysqli_query($dz,"SELECT * FROM foreignnews ORDER BY id DESC");
 $i = 0;
 while ($rz = mysqli_fetch_array($qz)){
  $rd = $rz['title'];
   $cnn = strlen($rz['title']);
  $title = "";
  if ($cnn <= 35){
  	$title = $rz['title'];
  }
  else{
  	$title = substr($rz['title'],0,35)." ...";
  }
  $cov = $rz['cover'];
  $id = $rz['id'];
  if ($i % 3 == 0){
      $dtable.= '<tr><td style="font-size:25px;width:20vw;height:15vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button title= "'.$rd.'" type="submit" name = "news" style="border-radius:20px;border:0;cursor:hand;background-color:transparent" value="'.$rd.'"><img src="'.$cov.'" style="height:15vw;width:20vw;border-radius:20px"></button></td></tr><tr><td style="font-family:candara;font-size:25px;font-weight:bold;text-align:center;padding-top:10px;color:black">'.$title.'</td></tr></table></div></td>';
  }else{
      $dtable.= '<td style="font-size:25px;width:20vw;height:15vw"><div style="height:100%;width:100%"><table style="width:100%;height:100%"><tr><td colspan="2"><button title= "'.$rd.'" type="submit" name = "news" style="border-radius:20px;border:0;cursor:hand;background-color:transparent" value="'.$rd.'"><img src="'.$cov.'" style="height:15vw;width:20vw;border-radius:20px"></button></td></tr><tr><td style="font-family:candara;font-size:25px;font-weight:bold;text-align:center;padding-top:10px;color:black">'.$title.'</td></tr></table></div></td>';
  }
  $i++;
 }
 $dtable.= "</tr></table></center>";
?>
<div style="overflow-y:auto;height:100%">
<form action = "Foreign.php" method= "post">
<p align="center" style="text-shadow:gray 2px 2px 1px"><font face="candara" size="6" color="maroon"><b>Foreign News</b></font></p>
<?php echo $dtable; ?>
</form>
</div>
</div>
<marquee style="position:absolute;bottom:0px;width:100%;height:30px;font-family:candara;font-size:25px;color:white;background-color:maroon;font-weight:bold">
<?php
  $dr = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
  $qr = mysqli_query($dr, "SELECT * FROM latest ORDER BY id DESC LIMIT 10");
  $n = "";
  $n .= '<font color="lightgreen">24/7</font> <font color="yellow">Naija </font>[NEWS Headlines]: ---- ';
  while ($rrr = mysqli_fetch_array($qr)){
    $n .= $rrr['title']." || ";
  }
 
  echo $n;
?>  
</marquee>
</body>
</html>
<?php
 if (isset($_POST['news'])){
   @session_start();
   $_SESSION['news'] = $_POST['news'];
   echo '<script>window.location.replace("Reader.php");</script>';
  }
?>