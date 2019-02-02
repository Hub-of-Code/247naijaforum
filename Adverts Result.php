<?php
  @session_start();
  if (!isset($_SESSION['client'])){
    echo '<script>window.location.replace("index.php");</script>';
  }
?><html><head><title>Adverts Result</title></head>
<a href="Search.php"><b><font face="candara" size="4">Back To Home</font></b></a>
<div style="position:relative;top:3vh;width:100%">
<center>
<table style="width:80vw">
<?php
  @session_start();
  $ind = $_SESSION['ad'];
  $d = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
  $qq = mysqli_query($d, "SELECT * FROM adverts WHERE id = '$ind'");
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
     <tr><td colspan="2" style="text-align:center"><pre><b><font face="candara" size="5">Description</font></b></pre></td></tr>
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
    <tr><td colspan="2" style="text-align:center"><pre><b><font face="candara" size="5">Description</font></b></pre></td></tr>
    <tr><td colspan="2"><pre><font face="candara" size="5"><?php echo $des; ?></font></pre></td></tr>
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