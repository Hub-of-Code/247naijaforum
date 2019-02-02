<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Advertise Product</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body>
<center><table style="padding-top:50px;width:80vw" cellspacing="5"><form action = "New Advert.php" enctype="multipart/form-data" method = "post">
<tr><td style="text-align:center;padding-bottom:30px" colspan="2"><font face="candara" size="6"><b>New Advert</b></font></td></tr>
<?php
  $b = "false";
  @session_start();
  $cl = $_SESSION['client'];
  $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  $q = mysqli_query($db, "SELECT * FROM businesses WHERE owners = '$cl'");
  $cnt = mysqli_num_rows($q);
  if ($cnt == 0){
    $b = "false";
  }
  else{
  	$b = "true";
    ?>
    <tr><td colspan="2" style="text-align:center"><pre><font face="candara" size="5" color="tomato"><b>Select Business</b></font></pre></td></tr>
    <td colspan="2" style="text-align:center;padding-bottom:30px"><select name="buss" style="font-family:candara;font-size:24px;font-weight:bold">
  <?php
    while ($ro = mysqli_fetch_array($q)){ ?>
    <option><?php echo $ro['names']; ?></option>
  <?php
    }
  ?>
    </select></td>
   <?php
  }
?>
<tr><td colspan="2" style="text-align:center"><font face="candara" size="5" color="tomato"><b>Image Uploads must not Exceed 1.5MB</b></font></td></tr>
<tr><td style="text-align:center"><font face="candara" size="5" color="cornflowerblue"><b>First Image</b></font></td><td style="text-align:center"><font face="candara" size="5" color="cornflowerblue"><b>Second Image</b></font></td></tr>
<tr><td style="width:40vw;height:35vw;padding-right:20px"><img src="Add.png" id = "im1" name="im1" style="width:40vw;height:35vw"><input type="file" accept="image/*" name="pi1" onchange = "document.getElementById('im1').src= window.URL.createObjectURL(this.files[0]);" style="position:relative;top:-35vw;height:35vw;width:40vw;opacity:0"></td><td style="width:40vw;height:35vw"><img src="Add.png" id = "im2" name="im2" style="width:40vw;height:35vw"><input type="file" accept="image/*" name= "pi2" onchange = "document.getElementById('im2').src= window.URL.createObjectURL(this.files[0]);" style="position:relative;top:-35vw;height:35vw;width:40vw;opacity:0"></td></tr>
<tr><td style="text-align:center;position:relative;top:-35vw"><font face="candara" size="5" color="cornflowerblue"><b>Third Image</b></font></td><td style="text-align:center;position:relative;top:-35vw"><font face="candara" size="5" color="cornflowerblue"><b>Fourth Image</b></font></td></tr>
<tr><td style="width:40vw;height:35vw;position:relative;top:-35vw;padding-right:20px"><img src="Add.png" id = "im3" name="im3" style="width:40vw;height:35vw"><input type="file" accept="image/*" name="pi3" onchange = "document.getElementById('im3').src= window.URL.createObjectURL(this.files[0]);" style="position:relative;top:-35vw;height:35vw;width:40vw;opacity:0"></td><td style="width:40vw;height:35vw;position:relative;top:-35vw"><img src="Add.png" id = "im4" name="im4" style="width:40vw;height:35vw"><input type="file" accept="image/*" name="pi4" onchange = "document.getElementById('im4').src= window.URL.createObjectURL(this.files[0]);" style="position:relative;top:-35vw;height:35vw;width:40vw;opacity:0"></td></tr>
<tr><td style="position:relative;top:-70vw;padding-top:20px"><font face="candara" size="5"><b>Product Name: </b></font><input type="text" style="font-family:tahoma;font-size:24px;width:100%;border-radius:5px" name="nam"></td></tr>
<tr><td style="position:relative;top:-70vw;padding-top:20px"><pre><font face="candara" size="5"><b>Price (<strike>N</strike>): </b></font> <input type="text" style="font-family:tahoma;font-size:24px;width:200px;border-radius:5px" name="price"></pre></td></tr>
<tr><td style="position:relative;top:-70vw;padding-top:20px"><font face="candara" size="5"><b>Description: </b></font></td></tr>
<tr><td colspan="2" style="position:relative;top:-70vw"><textarea style="font-family:tahoma;font-size:24px;width:100%;height:105px;border-radius:20px;padding-left:10px;padding-left:10px" name="des" maxlength="3000"></textarea></td></tr>
<tr><td colspan="2" style="position:relative;top:-68vw;text-align:center;"><button type="submit" style="cursor:hand;font-family:tahoma;font-size:24px;border-radius:10px;padding-left:10px;padding-left:10px;padding-right:10px;font-weight:bold;background-color:tomato;color:white" name="submit">Post</button></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php
  if (isset($_POST['submit'])){
     if ($b == "false"){
     	@session_start();
        $hs = $_SESSION['client'];
        $ddd = $_POST['des'];
        $nnn = $_POST['nam'];
        $nm = str_replace("'","''",$nnn);
        $desc = str_replace("'","''",$ddd);
        $pr = $_POST['price'];
        $img1 = "";
        $img2 = "";
        $img3 = "";
        $img4 = "";
         if (isset($_FILES['pi1'])){
          $fim1 = $_FILES['pi1']['name'];
          $tmp1 = $_FILES['pi1']['tmp_name'];
          $fl1 = "Ads/".$fim1;
          $img1 = $fl1;
          move_uploaded_file($tmp1, $fl1);
         }
        if (isset($_FILES['pi2'])){
          $fim2 = $_FILES['pi2']['name'];
          $tmp2 = $_FILES['pi2']['tmp_name'];
          $fl2 = "Ads/".$fim2;
          $img2 = $fl2;
          move_uploaded_file($tmp2, $fl2);
        }
         if (isset($_FILES['pi3'])){
          $fim3 = $_FILES['pi3']['name'];
          $tmp3 = $_FILES['pi3']['tmp_name'];
          $fl3 = "Ads/".$fim3;
          $img3 = $fl3;
          move_uploaded_file($tmp3, $fl3);
         }
         if (isset($_FILES['pi4'])){
          $fim4 = $_FILES['pi4']['name'];
          $tmp4 = $_FILES['pi4']['tmp_name'];
          $fl4 = "Ads/".$fim4;
          $img4 = $fl4;
          move_uploaded_file($tmp4, $fl4);
          }
     	$db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
     	$qr = mysqli_query($db, "INSERT INTO adverts (Name, Host, Description, FrontView, BackView, LeftView, RightView, Price, Business) VALUES('$nm','$hs','$desc','$img1','$img2','$img3','$img4','$pr','false')");
     	echo '<script>window.location.replace("Adverts.php");</script>';
     }
     else{
        @session_start();
        $hs = $_SESSION['client'];
        $ddd = $_POST['des'];
        $nnn = $_POST['nam'];
        $nm = str_replace("'","''",$nnn);
        $desc = str_replace("'","''",$ddd);
        $pr = $_POST['price'];
        $bi = $_POST['buss'];
        $img1 = "";
        $img2 = "";
        $img3 = "";
        $img4 = "";
        if (isset($_FILES['pi1'])){
          $fim1 = $_FILES['pi1']['name'];
          $tmp1 = $_FILES['pi1']['tmp_name'];
          $fl1 = "Ads/".$fim1;
          $img1 = $fl1;
          move_uploaded_file($tmp1, $fl1);
        }
        if (isset($_FILES['pi2'])){
          $fim2 = $_FILES['pi2']['name'];
          $tmp2 = $_FILES['pi2']['tmp_name'];
          $fl2 = "Ads/".$fim2;
          $img2 = $fl2;
          move_uploaded_file($tmp2, $fl2);
        }
         if (isset($_FILES['pi3'])){
          $fim3 = $_FILES['pi3']['name'];
          $tmp3 = $_FILES['pi3']['tmp_name'];
          $fl3 = "Ads/".$fim3;
          $img3 = $fl3;
          move_uploaded_file($tmp3, $fl3);
         }
         if (isset($_FILES['pi4'])){
          $fim4 = $_FILES['pi4']['name'];
          $tmp4 = $_FILES['pi4']['tmp_name'];
          $fl4 = "Ads/".$fim4;
          $img4 = $fl4;
          move_uploaded_file($tmp4, $fl4);
        }
     	$db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_business');
     	$qr = mysqli_query($db, "INSERT INTO adverts (Name, Host, Description, FrontView, BackView, LeftView, RightView, Price, Business) VALUES('$nm','$hs','$desc','$img1','$img2','$img3','$img4','$pr','$bi')");
     	echo '<script>window.location.replace("Adverts.php");</script>';
     }
     }
?>