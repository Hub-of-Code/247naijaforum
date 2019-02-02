<html>
<head><title>247 Job Approval</title></head>
<meta name="viewport" content="user-scalable=0">
<body style="margin:0;background-image:linear-gradient(60deg, white,lightgray)">
<div style="position:absolute;width:100%;height:100%;background-image:linear-gradient(60deg, white, lightgray)" id="view">
<script>
function auth(){
  var au = document.getElementById("pass");
  var v = document.getElementById("view");
  var c = document.getElementById("con");
  if (au.value == "1234"){
    v.style.visibility="hidden";
    c.style.visibility="visible";
  }
  else{
    alert("Invalid Security Code");
  }
}
</script>
<p style="padding-top:40vh;text-align:center">
<font face="candara" size="5"><b>Enter the Admin Security Code to Proceed</b></font>
</p>
<p style="text-align:center">
<input type="password" id="pass" style="width:500px;padding-left:10px;padding-right:10px;border-radius:20px;font-family:candara;font-size:25px;font-weight:bold">
</p>
<p style="text-align:center"><input type="button" onclick="auth()" style="padding-left:10px;padding-right:10px;border-radius:20px;font-family:candara;font-size:25px;font-weight:bold;background-color:tomato;color:white" value="Login"></p>
</div>
<div style="width:100%;height:100%;overflow-y:auto;visibility:hidden" id="con">
  <div style="padding-top:50px;width:100%">
    <p align="center"><font face="candara" size="6"><b>Pending Approvals</b></font></p>
    <center>
    <table style="width:85%">
    <form action = "Overview.php" method = "post">
  	<?php
  	 $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
     $q1 = mysqli_query($db1, "SELECT * FROM jb WHERE approved = 'false'");
     while ($r1 = mysqli_fetch_array($q1)){ 
     	$ph = $r1['cover_photo'];
        $nm = $r1['company_name'];
        $id = $r1['id'];
     ?>
      <tr>
        <td style="width:150px;height:150%">
          <img src="<?php echo $ph; ?>" style="width:150px;height:150px;border-radius:50%">
        </td>
        <td style="padding-left:20px">
          <font face="candara" size="6" color="maroon"><b><?php echo $nm; ?></b></font>
        </td>
        <td style="width:200px">
          <button type="submit" name="submit" style="font-family:candara;font-size:25px;color:cornflowerblue;font-weight:bold;text-decoration:underline;background-color:transparent;border:0;cursor:hand" value="<?php echo $id; ?>">View Job</button>
        </td>
      </tr>
     <?php
     }
  	?>
  </form>
  </table>
</center>
</div>
</div>
</body>
</html>