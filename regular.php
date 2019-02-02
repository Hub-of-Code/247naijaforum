<html>
<head>
<title>Regular Account</title>
</head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
	<p align="center" style="position:relative;top:5%;padding-left:40px"><font face="candara" size="6" color="tomato"><b>Create a Regular Account</b></font></p>
  <div style="width:50vw;position:relative;left:25vw;background-color:lightgray;padding-top:5px;padding-bottom:40px;top:15%;border-radius:30px;padding-left:20px;padding-right:20px">
  <center>
  <table style="width:100%">
  <tr><td style="text-align:center" colspan="2">
  <form action="regular.php" method="post" enctype="multipart/form-data">
  <img id ="prof" src="account.png" style="border-radius:50%;height:150px;width:150px;position:relative;top:-80px">
  </td></tr>
  <tr><td style="text-align:center" colspan="2"><button style="position:relative;top:-80px;background-color:tomato;color:white;border-radius:50px;font-weight:bold;font-size:20px;cursor:hand">Choose Photo
  <input type="file" name= "upload" accept="image/*" onchange="document.getElementById('prof').src= window.URL.createObjectURL(this.files[0]);" style="opacity:0;position:absolute;left:-40px;top:-30px;height:70px;cursor:hand"></button></td></tr>
  <tr><td style="text-align:center;position:relative;top:-40px" colspan="2"><font size="5" face="constantia"><b>You must upload a photo!</b></font></td></tr>
  	  <tr>
        <td style="text-align:right">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Name: </label>
        </td>
         <td style="text-align:left;padding-left:25px">
          <input type="text" name="cl" placeholder="First and Second" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
  	  <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Email Or Phone: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <input type="text" name="emailph" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
       <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Password: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <input type="password" name="pass" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
       <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Gender: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <select name="gender" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:50%;padding-left:5px;padding-right:10px">
          	<option>Male</option>
          	<option>Female</option>
          </select>
        </td>
      </tr>
      <tr><td colspan="2" style="text-align:center;padding-top:40px"><input type="submit" name="signin" style="padding:7px;color:white;background-color:tomato;font-family:candara;font-size:24px;border:2px solid white;border-radius:20px;font-weight:bold;cursor:hand" value="SIGN UP"></td></td></tr>
    </table>
  </center>
  </div>
</form>
</body>
<?php
 if (isset($_POST['signin'])){
 	if (isset($_FILES['upload'])){
     $nm = $_POST['cl'];
     $emph = $_POST['emailph'];
     $pass = $_POST['pass'];
     $gen = $_POST['gender'];
     $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
     $q = mysqli_query($db,"SELECT * FROM members WHERE Email_phone = '$emph'");
     $cnt = mysqli_num_rows($q);
     if ($cnt != 0){
       echo "<script>alert('There is a User with that Email Address or Phone number already');</script>";
       echo "<script>window.location.replace('regular.php');</script>";
     }
     else{
       $filename = $_FILES['upload']['name'];
       $file_tmp_name = $_FILES['upload']['tmp_name'];
       $targetdir = "Profile Pics/";
       $profilepic = $targetdir.$filename;
       if (move_uploaded_file($file_tmp_name, $profilepic)){
         $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
         $q = mysqli_query($db, "INSERT INTO members (Name, Email_phone, Password, Gender, Profile_pic,Type) VALUES ('$nm','$emph','$pass','$gen','$profilepic','vip')");
         @session_start();
         $_SESSION['client']=$emph;
         $_SESSION['accounttype']="regular";
         $_SESSION['pic'] = $profilepic;
         $_SESSION['name'] = $nm;
         echo '<script>alert("Account Creation Successful!");</script>';
         echo '<script>window.location.replace("Home.php");</script>';
       }
     }
 	}
 }
?>