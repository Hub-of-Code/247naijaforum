<?php 
  @session_start();
  if (!isset($_SESSION['client'])){
  	echo '<script>window.location.replace("index.php");</script>';
  }
   $cl = $_SESSION['client'];
   $tp = "";
   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
   $q = mysqli_query($db, "SELECT Type FROM members WHERE Email_phone = '$cl'");
   while ($ro = mysqli_fetch_array($q)){
     $tp = $ro['Type'];
    }
   if ($tp == "regular"){
    echo '<script>alert("You must get a VIP account to access this feature!");</script>';
    echo '<script>window.location.replace("Adverts.php");</script>';
   }
   else{
    
   }
?>
<?php
  @session_start();
  $client = $_SESSION['client'];
  $type = $_SESSION['accounttype'];
  $pict = "";
  $di = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  $qi = mysqli_query($di,"SELECT Profile_pic FROM members WHERE Email_phone = '$client'");
  while ($ri = mysqli_fetch_array($qi)){
    $pict = $ri['Profile_pic'];
  }
?>
<html><head><title>247 Job Seeker</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.38">
<body style="margin:0">
<form action = "Jobs.php" method="post">
<div style="position:absolute;width:100%;height:100%;overflow-y:auto">
<center>
<table style="padding-top:150px;width:90%">
	<?php
    if (isset($_POST['findjob'])){
        $sr = $_POST['search_term'];
        $sm = str_replace("'","''",$sr);
      ?>
      <tr><td style="text-align:center" colspan="3"><a href = "Jobs.php"><b><font face="candara" size="5" color="cornflowerblue">Quit Search</font></b></a></td></tr>
    <?php
      $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
      $q1 = mysqli_query($db1, "SELECT * FROM jb WHERE approved = 'true' AND host LIKE '%$sm%' OR company_name LIKE '%$sm%' OR company_address LIKE '%$sm%' OR company_lga LIKE '%$sm%' OR company_state LIKE '%$sm%' OR company_phone LIKE '%$sm%' OR company_email LIKE '%$sm%' OR company_description LIKE '%$sm%' OR vacancy LIKE '%$sm%'");
      $cnt1 = mysqli_num_rows($q1);
      if ($cnt1 == 0){ ?>
        <tr><td style="text-align:center" colspan="3"><font face="candara" size="5"><b><em>No results found from your search</em></b></font></td></tr>
      <?php
      }
      if ($cnt1 == 1){ ?>
        <tr><td style="text-align:center" colspan="3"><font face="candara" size="5"><b><em>1 Result found</em></b></font></td></tr>
      <?php
      }
      if ($cnt1 >=2 ){ ?>
        <tr><td style="text-align:center" colspan="3"><font face="candara" size="5"><b><em><?php echo $cnt1; ?> Results found</em></b></font></td></tr>
      <?php
      }
      while ($ro2 = mysqli_fetch_array($q1)){
       $vacancies = $ro2['vacancy'];
       $vac = $ro2['vp'];
       $nam = $ro2['company_name'];
       $add = $ro2['company_address'];
       $id = $ro2['id'];
       $hs = $ro2['host'];
       $cov = $ro2['cover_photo'];
        $vcnt = $ro2['vp'];
       $vpos = $ro2['vacancy'];
    ?>
      <tr>
        <td rowspan="3" style="width:150"><img src="<?php echo $cov; ?>" style="width:150px;height:150px;border-radius:20px;border:2px solid gold"></td>
        <td><pre>   <button name="view" style="border:0;background-color:transparent;text-decoration:underline;cursor:hand" value="<?php echo $id; ?>"><font face="candara" size="6" color="tomato"><b><?php echo $nam; ?></b></font></button></pre></td>
      </tr>
      <tr><td><pre>    <font face="candara" size="5"><b>Address: </b></font><font face="candara" size="5" color="gray"><b><?php echo $add; ?></b></font></td></tr>
      <tr><td><pre>    <font face="candara" size="5"><b>Vacancies: </b></font><font face="candara" size="5" color="gray"><b>
        <?php
          if ($vac == 0){
            echo 'None';
          }
          else{
            echo $vac;
          }
        ?>
      </b></font></td>
      <?php
        @session_start();
        $own = $_SESSION['client'];
        if ($own != $hs){

        }
        else{ ?>
            <td><pre><button type="button" value = "<?php echo $id; ?>" style="font-family:candara;font-size:25px;font-weight:bold;color:cornflowerblue;text-decoration:underline;background-color:transparent;border:0;cursor:hand" onclick="document.getElementById('edit').style.visibility='visible';document.getElementById('eid').value=this.value;">Edit Job</button>    <button type="submit" name="del" value = "<?php echo $id; ?>" style="font-family:candara;font-size:25px;font-weight:bold;color:tomato;text-decoration:underline;background-color:transparent;border:0;cursor:hand">Remove Job</button></td>
        <?php
        }
      ?>
    <?php
    }
    }
    else{ ?>
      <tr><td style="text-align:center;padding-bottom:30px;text-shadow:gray 2px 2px 1px" colspan="3"><b><font face="candara" size="6" color="maroon">All Available Jobs</font></b></td></tr>
    <?php
     $db2 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
     $q2 = mysqli_query($db2, "SELECT * FROM jb WHERE approved = 'true'");
     $nam = "";
     $add = "";
     $id = 0;
     $hs = "";
     $vacancies = 0;
     while ($ro2 = mysqli_fetch_array($q2)){
       $vacancies = $ro2['vacancy'];
       $vac = $ro2['vp'];
       $nam = $ro2['company_name'];
       $add = $ro2['company_address'];
       $id = $ro2['id'];
       $hs = $ro2['host'];
       $cov = $ro2['cover_photo'];
       $vcnt = $ro2['vp'];
       $vpos = $ro2['vacancy'];
    ?>
      <tr>
        <td rowspan="3" style="width:150"><img src="<?php echo $cov; ?>" style="width:150px;height:150px;border-radius:20px;border:2px solid gold"></td>
        <td><pre>   <button name="view" style="border:0;background-color:transparent;text-decoration:underline;cursor:hand" value="<?php echo $id; ?>"><font face="candara" size="6" color="tomato" value="<?php echo $id; ?>"><b><?php echo $nam; ?></b></font></button></pre></td>
      </tr>
      <tr><td><pre>    <font face="candara" size="5"><b>Address: </b></font><font face="candara" size="5" color="gray"><b><?php echo $add; ?></b></font></td></tr>
      <tr><td><pre>    <font face="candara" size="5"><b>Vacancies: </b></font><font face="candara" size="5" color="gray"><b>
        <?php
          if ($vac == 0){
            echo 'None';
          }
          else{
            echo $vac;
          }
        ?>
      </b></font></td>
      <?php
        @session_start();
        $own = $_SESSION['client'];
        if ($own != $hs){

        }
        else{ ?>
           <td><button type="button" value = "<?php echo $id; ?>" style="font-family:candara;font-size:25px;font-weight:bold;color:cornflowerblue;text-decoration:underline;background-color:transparent;border:0;cursor:hand" onclick="document.getElementById('edit').style.visibility='visible';document.getElementById('eid').value=this.value;">Edit Job</button>    <button type="sumbit" name="del" value = "<?php echo $id; ?>" style="font-family:candara;font-size:25px;font-weight:bold;color:tomato;text-decoration:underline;background-color:transparent;border:0;cursor:hand">Remove Job</button></td>
        <?php
        }
      ?>
    <?php
    }
    }
  ?>
</table>
</center>
</div>
<table style="background-color:lightgray;width:100%;position:absolute;top:0px">
<form action="Jobs.php" method="post">
<tr><td style="width:120px"><img src="<?php echo $pict; ?>" style="width:120px;height:120px;border-radius:50%;border:3px solid
<?php
 if ($type=="regular"){
  echo 'cornflowerblue';
 }
 else{
  echo 'gold';
 }  ?>"></td>
<td><input type="button" style="color:tomato;border-radius:10px;background-color:white;border:3px solid tomato
 ;font-size:20px;font-family:candara;font-weight:bold;cursor:hand" onclick="window.location = 'Job Registration.php'" value="Register a Job"></td>
 <td style="padding-left:5px"><pre><input type="text" name="search_term" style="width:350px;font-family:candara;font-size:25px;padding-left:10px;padding-right:10px;border-radius:10px;font-weight:bold"> <button type="submit" name="findjob" style="background-color:tomato;color:white;font-family:candara;font-size:25px;font-weight:bold;padding-left:10px;padding-right:10px;border-radius:15px;border:0">Search</button>       <a href = "Adverts.php"><b><font face="candara" size="5" color="cornflowerblue">Back</font></b></a></pre></td>
</tr>
</form>
</table>
</form>
<div style="width:60vw;position:absolute;left:20vw;background-color:white;border:2px solid lightgray;top:6vh;border-radius:30px;visibility:hidden;padding-bottom:40px" id="edit">
  <form action="Jobs.php" method="post">
  <table style="width:100%;padding-right:10px;padding-top:10px">
    <tr><td style="text-align:right"><input type="button" name="clear" style="padding-left:10px;padding-right:10px;font-family:candara;font-size:40px;font-weight:bold;border-radius:20px;background-color:white;border:3px solid tomato;color:tomato;cursor:hand;border:2px solid gold" value="X" onclick = "document.getElementById('edit').style.visibility = 'hidden';"></td></tr>
    <tr><td colspan="2"><input type="text" value="" id="eid" name="index" style="width:0px;visibility:hidden;height:0px"></td></tr>
     <tr><td colspan="2" style="text-align:center;padding-bottom:30px"><b><font face="candara" size="5" color="tomato">Edit Job</font></b></td></tr>
    <tr><td style="padding-left:40px"><pre><b><font face="candara" size="5">Vacancies (Number): </font></b>   <input type="number" style="width:150px;font-family:candara;font-size:25px;font-weight:bold;border-radius:20px;padding-left:10px;padding-right:10px" name="vp1"></pre></td></tr>
    <tr><td style="padding-left:40px;padding-top:40px"><pre><b><font face="candara" size="5">Vacant Position(s): </font></b></pre></td></tr>
    <tr><td style="padding-left:40px;padding-top:20px"><b><font face="candara" size="4" color="tomato">Enter or Edit vacant positions line by line</font></b></td></tr>
    <tr><td style="padding-left:40px;padding-top:20px"><textarea style="height:200px;width:95%;padding:10px;border-radius:20px;font-family:candara;font-size:25px;font-weight:bold;color:gray" name="vp2"></textarea></td></tr>
     <tr><td style="padding-left:40px;padding-top:20px;text-align:center"colspan="2"><input type="submit" name="ed" style="padding-left:10px;padding-right:10px;font-family:candara;font-size:25px;font-weight:bold;border-radius:20px;background-color:tomato;color:white;cursor:hand;border:2px solid gold" value="Done"></td></tr>
  </table>
</form>
</div>
</body>
</html>
<?php
  if (isset($_POST['ed'])){
    $vaca1 = $_POST['vp1'];
    $vacac2 = $_POST['vp2'];
    $vaca2 = str_replace("'", "''", $vacac2);
    $ids = $_POST['index'];
    $dbx = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
    $qx = mysqli_query($dbx, "UPDATE jb SET vacancy= '$vaca2', vp = $vaca1 WHERE id = '$ids'");
    echo '<script>window.location.replace("Jobs.php");</script>';
  }
  if (isset($_POST['del'])){
    $ids = $_POST['del'];
    $dbx = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
    $qx = mysqli_query($dbx, "DELETE FROM jb WHERE id = '$ids'");
    echo '<script>window.location.replace("Jobs.php");</script>';
  }
  if (isset($_POST['view'])){
    @session_start();
    $_SESSION['job'] = $_POST['view'];
    echo '<script>window.location.replace("View Job.php");</script>';
  }
?>