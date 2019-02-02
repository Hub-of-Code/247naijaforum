<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Job Overview</title></head>
<meta name="viewport" content="user-scalable=0, initial-scale=0.45">
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
  $link = "";
  $vac = "";
  $vp = 0;
  @session_start();
  $id = $_SESSION['job'];
  $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
  $q1 = mysqli_query($db1, "SELECT * FROM jb WHERE id = '$id'");
  while ($r1 = mysqli_fetch_array($q1)){
       $cov = $r1['cover_photo'];
       $nm = $r1['company_name'];
       $add = $r1['company_address'];
       $em = $r1['company_email'];
       $ph = $r1['company_phone'];
       $st = $r1['company_state'];
       $lga = $r1['company_lga'];
       $des = $r1['company_description'];
       $vac = $r1['vacancy'];
       $link = $r1['link'];
       $vp = $r1['vp'];
  }
?>
<div style="position:absolute;left:10vw;top:5vh;width:80vw;padding-top:20px;padding-bottom:40px;overflow-y:auto;border-radius:30px">
<table style="width:100%;padding-left:20px;padding-right:20px">
  <tr><td style="text-align:right;padding-right:10px"><input type="button" style="font-family:candara;font-size:35px;color:cornflowerblue;font-weight:bold;background-color:white;border:3px solid tomato;cursor:hand;border-radius:50%;color:tomato" value="X" onclick="window.location.replace('Jobs.php');"></td></tr>
  <tr><td style="text-align:center;padding-bottom:50px"><img src="<?php echo $cov; ?>" style="width:30vw;height:30vw;border-radius:30px;background-color:transparent"></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Name: </b></font><font face="candara" size="5"><?php echo $nm; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Email: </b></font><font face="candara" size="5" color="cornflowerblue"><?php echo $em; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Phone (s): </b></font><font face="candara" size="5"><?php echo $ph; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Address: </b></font><font face="candara" size="5"><?php echo $add; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company L.G.A: </b></font><font face="candara" size="5"><?php echo $lga; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company State: </b></font><font face="candara" size="5"><?php echo $st; ?></td></tr>
  <tr><td style="padding-bottom:20px"><font face="candara" size="5"><b>Company Description:</b></font></td></tr>
  <tr><td style="white-space:pre-wrap;padding-bottom:30px;padding-left:30px;padding-right:30px"><font face="candara" size="5"><?php echo $des; ?></font></td></tr>
  <tr><td><font face="candara" size="5"><b>Vacant Position (s):</b></font></td></tr>
  <tr><td style="padding-bottom:30px;padding-left:30px;padding-right:30px"><pre><font face="candara" size="5"><?php 
      if ($vp == 0){
        echo 'None';
      }
      else{
        echo $vac;
      } ?>
  </font></pre></td></tr>
    <?php
    if ($link == "false"){ ?>
      <tr><td style="text-align:center"><pre><font face="candara" size="5"><b>For Enquiries or Application, Contact;</b></font></pre></td></tr>
      <tr><td style="text-align:center"><font face="candara" size="5"><b>Email: </b></font><font face="candara" size="5" color="cornflowerblue"><b><?php echo $em; ?></b></font></td></tr>
      <tr><td style="text-align:center"><font face="candara" size="5"><b>Phone: </b></font><font face="candara" size="5" color="cornflowerblue"><b><?php echo $ph; ?></b></font></td></tr>
    <?php
    }
    else{ ?>
     <tr><td style="text-align:center"><pre><font face="candara" size="5"><b>To apply, visit the link below</b></font></pre></td></tr>
     <tr><td style="text-align:center"><a style="color:blue;text-decoration:underline;cursor:hand" onclick="window.open('<?php echo $link; ?>');"><font face="candara" size="5"><b><?php echo $link; ?></b></font></a></td></tr>
    <?php
    }
  ?>
  </form>
</table>
</div>
</body>
</html>