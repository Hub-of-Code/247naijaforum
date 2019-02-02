<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Register Business</title></head>
<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=0.4">
<body>
<p align="center" style="position:relative;top:10vh"><b><font face="candara" color="maroon" size="6">Business Cover Photo</font></b></p>
<center>
<table style="width:75vw;position:relative;top:10vh">
<form action="New Business.php" method="post" enctype="multipart/form-data">
<tr><td style="width:70vw;text-align:center"><button style="width:40vw;height:35vw;background-color:transparent;border:0"><img src="Add.png" style="height:100%;width:100%;border-radius:20px" id="ima"><input type="file" name="upload" accept="image/*" title="Cover Photo" style="position:relative;top:-35vw;width:100%;height:100%;opacity:0" onchange="document.getElementById('ima').src=window.URL.createObjectURL(this.files[0]);"></button></td>
<tr><td style="text-align:center;padding-top:30px"><pre><b><font face="candara" color="maroon" size="5">Choose Name: </font></b><input type="text" name="nam" maxlength="45" style="width:25vw;font-size:20px;border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-weight:bold"></pre></td></tr>
<tr><td style="text-align:center;padding-top:40px"><b><font face="candara" color="maroon" size="5">Description</font></b></td></tr>
<tr><td style="text-align:center"><textarea name="des" style="width:65%;height:50vh;border-radius:15px;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:20px;font-size:3vh;text-align:justify-all" maxlength="500"></textarea></td></tr>
<tr><td style="text-align:center"><button type="submit" name="bus" style="background-color:white;color:tomato;border-radius:30px;font-size:3vh;cursor:hand;font-weight:bold">Submit</button></td></tr>
</post>
</table>
</center>
</body>
</html>
<?php
 @session_start();
 $own = $_SESSION['client'];
 if (isset($_POST['bus'])){
 	if (isset($_FILES['upload'])){
   $ds = $_POST['des'];
   $n = $_POST['nam'];
 	 $des = str_replace("'","''",$ds);
 	 $nm = str_replace("'","''",$n);
     $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
     $q = mysqli_query($db,"SELECT * FROM businesses WHERE names = '$nm'");
     $cnt = mysqli_num_rows($q);
     if ($cnt <> 0){
       echo "<script>alert('Business Name already taken');</script>";
     }
     else{
       $filename = $_FILES['upload']['name'];
       $file_tmp_name = $_FILES['upload']['tmp_name'];
       $targetdir = "Business/";
       $coverphoto = $targetdir.$filename;
       if (move_uploaded_file($file_tmp_name, $coverphoto)){
        $qt = mysqli_query($db, "INSERT INTO businesses (owners, covers, names, description) VALUES('$own','$coverphoto','$nm','$des')");
         @session_start();
         echo '<script>window.location.replace("Businesses.php");</script>';
       }
     }
 	}
 }
?>