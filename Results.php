<div style="width:100%">
<p align = "center" style="padding-left:200px"><b><em><font face="candara" size="5">
  <?php
  if (isset($_GET['searchterm'])){
   @session_start();
  	$cl = $_SESSION['client'];
    $sss = $_GET['searchterm'];
  	$sm = str_replace("'","''",$sss);
    $d1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
    $q1 = mysqli_query($d1,"SELECT * FROM members WHERE Email_phone <> '$cl' AND Name LIKE '%$sm%' OR Email_phone LIKE '%$sm%' OR Type LIKE '%$sm%'");
    $cnt1 = mysqli_num_rows($q1);
    $q2 = mysqli_query($d1,"SELECT * FROM businesses WHERE owners <> '$cl' AND names LIKE '%$sm%' OR description LIKE '%$sm%' OR owners LIKE '%$sm%'");
    $cnt2 = mysqli_num_rows($q2);
    $q3 = mysqli_query($d1,"SELECT * FROM seminars WHERE Title LIKE '%$sm%' OR content LIKE '%$sm%' OR Host LIKE '%$sm%'");
    $cnt3 = mysqli_num_rows($q3);
    $q4 = mysqli_query($d1,"SELECT * FROM topics WHERE Title LIKE '%$sm%'OR Host LIKE '%$sm%'");
    $cnt4 = mysqli_num_rows($q4);
    $d2 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
    $q5 = mysqli_query($d2,"SELECT * FROM latest WHERE content LIKE '%$sm%' OR title LIKE '%$sm%'");
    $cnt5 = mysqli_num_rows($q5);
    $d3 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
    $q6 = mysqli_query($d3,"SELECT * FROM adverts WHERE Description LIKE '%$sm%' OR Name LIKE '%$sm%' OR Host LIKE '%$sm%'");
    $cnt6 = mysqli_num_rows($q6);
    $total = $cnt1 + $cnt2 + $cnt3 + $cnt4 + $cnt5 + $cnt6;
    if ($total == 0){
      echo 'No results found from your search';
    }
    if ($total == 1){
      echo '1 Result found';
    }
    if ($total > 1){
      echo $total." Results found";
    }
  }
  ?>
  </font></em></b></p>
  <p align="center"><font face="candara" size="5"><b><em></em></p></b></font></p>
  <table style="width:100%;position:relative;left:10%">
      <form action="Search.php" method="post">
  	<?php
  	 @session_start();
  	 $emp = "";
  	 $cl = $_SESSION['client'];
  	 if (isset($_GET['searchterm'])){
  	  $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
       $dm = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  	   $qm = mysqli_query($dm, "SELECT * FROM members WHERE Email_phone <> '$cl' AND Name LIKE '%$sm%' OR Email_phone LIKE '%$sm%' OR Type LIKE '%$sm%'");
  	   while ($rm = mysqli_fetch_array($qm)){
  	   	$rn = $rm['Name'];
  	   	$cov = $rm['Profile_pic'];
  	   	$id = $rm['id'];
  	   	$tp = $rm['Type'];
        $emp = $rm['Email_phone'];
  	   ?>
  	   <tr><td rowspan="2" style="width:100px;height:100px"><img src="<?php echo $cov; ?>" style="width:100px;height:100px;border-radius:50%"></td><td style="padding-left:10px"><button type="submit" name= "us" value = "<?php echo $id; ?>" style="padding-left:10px;text-align:left;width:100%;height:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>Member: </b></font><font face="candara" size="5"><b><?php echo $rn; ?> @ </b></font><font face="candara" size="5" color="cornflowerblue"><b><?php echo $emp; ?></b></font></button></td></tr>
  	   <tr><td style="padding-left:20px">
       <font face="candara" size="4"
  	   <?php
         if ($tp == "regular"){
            echo ' color="cornflowerblue"><b>Regular Member';
         }
         else{
            echo ' color="brown"><b>VIP Member';
         }
       ?>
       </b></font></td></tr>
       <?php
  	   }
  	 }
  	?>
  	</form>
  </table>
  <table style="width:100%;position:relative;left:10%">
    <form action="Search.php" method="post">
  	<?php
   	 if (isset($_GET['searchterm'])){
   	  @session_start();
      $cl = $_SESSION['client'];
     $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
   	  $dd = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
      $qd = mysqli_query($dd,"SELECT * FROM topics WHERE Title LIKE '%$sm%' OR Host LIKE '%$sm%'");
      while ($rd = mysqli_fetch_array($qd)){ 
      $ti = $rd['Title'];
      $hs = $rd['Host'];
      $id = $rd['id'];
      $ps = "";
      $q = mysqli_query($dd, "SELECT Name FROM members WHERE Email_phone = '$hs'");
      while ($rdd = mysqli_fetch_array($q)){
        $ps = $rdd['Name'];
      }
      ?>
        <tr><td style="width:100px;height:100px" rowspan="2"><img src="247Naija.png" style="width:100px;height:100px;border-radius:50%;background-color:tomato"></td>
          <td><button type="submit" name= "top" value = "<?php echo $id; ?>" style="padding-left:20px;text-align:left;width:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>Discussion Topic: </b></font><font face="candara" size="5"><b><?php echo $ti; ?></b></font></button></td></tr>
          <tr><td style="padding-left:20px"><font face="candara" size="4"><b>Posted By: <?php echo $ps; ?></b></font></td></tr>
      <?php
      }
   	 }
  	?>
  </form>
  </table>
  <table style="width:100%;position:relative;left:10%">
    <form action="Search.php" method="post">
  	<?php
   	 if (isset($_GET['searchterm'])){
   	  @session_start();
      $cl = $_SESSION['client'];
     $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
   	  $ds = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
      $qs = mysqli_query($ds,"SELECT * FROM seminars WHERE Title LIKE '%$sm%' OR content LIKE '%$sm%' OR Host LIKE '%$sm%'");
   	  while ($rs = mysqli_fetch_array($qs)){ 
      $ti = $rs['Title'];
      $hs = $rs['Host'];
      $id = $rs['id'];
      $ps = "";
      $q = mysqli_query($ds, "SELECT Name FROM members WHERE Email_phone = '$hs'");
      while ($rds = mysqli_fetch_array($q)){
        $ps = $rds['Name'];
      }
      ?>
        <tr><td style="width:100px;height:100px" rowspan="2"><img src="247Naija.png" style="width:100px;height:100px;border-radius:50%;background-color:tomato"></td>
          <td style="width:100%"><button type="submit" name= "sem" value = "<?php echo $id; ?>" style="padding-left:20px;text-align:left;width:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>Seminar: </b></font><font face="candara" size="5"><b><?php echo $ti; ?></b></font></button></td></tr>
          <tr><td style="padding-left:20px"><font face="candara" size="4"><b>Written By: <?php echo $ps; ?></b></font></td></
      <?php
      }
     }
    ?>
  </form>
  </table>
  <table style="width:100%;position:relative;left:10%">
    <form action ="Search.php" method="post">
  	<?php
   	 if (isset($_GET['searchterm'])){
   	  @session_start();
      $cl = $_SESSION['client'];
     $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
   	  $dl = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
      $ql = mysqli_query($dl,"SELECT * FROM latest WHERE content LIKE '%$sm%' OR title LIKE '%$sm%'");
   	 while ($rl = mysqli_fetch_array($ql)){ 
      $ti = $rl['title'];
      $id = $rl['id'];
      $ps = "";
      ?>
        <tr><td style="width:100px;height:100px" rowspan="2"><img src="247Naija.png" style="width:100px;height:100px;border-radius:50%;background-color:tomato"></td>
          <td style="width:100%"><button type="submit" name= "news" value = "<?php echo $ti; ?>" style="padding-left:20px;text-align:left;width:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>[NEWS]: </b></font><font face="candara" size="5"><b><?php echo $ti; ?></b></font></button></td></tr>
          <tr><td style="padding-left:20px"><font face="candara" size="4"><b>247Naija Sponsored</b></font></td></tr>
      <?php
      }
     }
    ?>
  </form>
  </table>
   <table style="width:100%;position:relative;left:10%">
    <form action = "Search.php" method = "post">
   	<?php
   	 if (isset($_GET['searchterm'])){
   	  @session_start();
      $cl = $_SESSION['client'];
     $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
   	  $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
      $qb = mysqli_query($db,"SELECT * FROM businesses WHERE owners <> '$cl' AND names LIKE '%$sm%' OR description LIKE '%$sm%' OR owners LIKE '%$sm%'");
   	 while ($rb = mysqli_fetch_array($qb)){ 
      $ti = $rb['names'];
      $own = $rb['owners'];
      $id = $rb['id'];
      $cov = $rb['covers'];
      $ps = "";
      $q = mysqli_query($db, "SELECT Name FROM members WHERE Email_phone = '$own'");
      while ($rdd = mysqli_fetch_array($q)){
        $ps = $rdd['Name'];
      }
      ?>
        <tr><td style="width:120px;height:100px" rowspan="2"><img src="<?php echo $cov; ?>" style="width:120px;height:100px;background-color:tomato;border-radius:10px"></td>
          <td style="width:100%"><button type="submit" name= "buss" value = "<?php echo $id; ?>" style="padding-left:20px;text-align:left;width:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>[BUSINESS]: </b></font><font face="candara" size="5"><b><?php echo $ti; ?></b></font></button></td></tr>
          <tr><td style="padding-left:20px"><font face="candara" size="4"><b>Owned By: <?php echo $ps; ?></b></font></td></
      <?php
      }
     }
    ?>
  </form>
  </table>
  <table style="width:100%;position:relative;left:10%">
    <form action ="Search.php" method="post">
    <?php
     if (isset($_GET['searchterm'])){
      @session_start();
      $cl = $_SESSION['client'];
      $sss = $_GET['searchterm'];
      $sm = str_replace("'","''",$sss);
      $da = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
      $qa = mysqli_query($da,"SELECT * FROM adverts WHERE Description LIKE '%$sm%' OR Name LIKE '%$sm%' OR Price LIKE '%$sm%' OR Host LIKE '%$sm%'");
     while ($ra = mysqli_fetch_array($qa)){
      $nm = $ra['Name'];
      $id = $ra['id'];
      $f = $ra['FrontView'];
      $b = $ra['BackView'];
      $l = $ra['LeftView'];
      $r = $ra['RightView'];
      $pr = $ra['Price'];
      $hs = $ra['Host'];
      $cov = "";
      $dy = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
      $q = mysqli_query($dy, "SELECT * FROM members WHERE Email_phone = '$hs'");
      while ($rds = mysqli_fetch_array($q)){
        $cov = $rds['Profile_pic'];
      }
      ?>
        <tr><td style="width:100px;height:100px" rowspan="2"><img src="<?php echo $cov; ?>" style="width:100px;height:100px;border-radius:50%;background-color:tomato"></td>
          <td style="width:100%"><button type="submit" name= "ad" value = "<?php echo $id; ?>" style="padding-left:20px;text-align:left;width:100%;border:0;background-color:transparent;cursor:hand;"><font face="candara" size="5" color="tomato"><b>[ADVERT]: </b></font><font face="candara" size="5"><b><?php echo $nm; ?></b></font></button></td></tr>
          <tr><td style="padding-left:20px;width:100%"><button type="submit" name="ad" value = "<?php echo $id; ?>" style="background-color:transparent;cursor:hand;;border:0"><pre><img src="<?php echo $f; ?>" style="width:50px;height:50px"> <img src="<?php echo $b; ?>" style="width:50px;height:50px"> <img src="<?php echo $l; ?>" style="width:50px;height:50px"> <img src="<?php echo $r; ?>" style="width:50px;height:50px"></pre><font face="candara" size="4" color="tomato"><b>  Price: </b></font><font face="candara" size="4"><b><strike>N</strike> <?php echo $pr; ?></b></font></button></td></tr>
      <?php
      }
     }
    ?>
  </form>
  </table>
  </div>