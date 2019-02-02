<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>New Article</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="margin:0">
<div style="width:100%;height:100%;background-color:lightgray;overflow-y:auto">
<center>
<table style="padding-top:10vh;padding-bottom:50px;width:90%">
<form action = "New.php" method="post">
   <tr><td style="width:100%;text-align:center"><pre><b><font face="candara" size="5">Title:  </font></b><input type="text" name="top" style="border-radius:5px;width:70%;font-size:22px;font-family:candara;font-weight:bold"></pre></td></tr>
   <tr><td style="width:100%;text-align:center;height:80px"><font face="candara" size="5"><b>Content</b></font></td></tr>
   <tr><td style="text-align:center"><textarea name="sem" style="width:80%;height:70vh;border-radius:15px;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:20px;font-size:3vh;text-align:justify-all" maxlength="50000"></textarea></td></tr>
   <tr><td style="text-align:center;padding-top:20px"><button type="submit" name="seminar" style="background-color:white;color:tomato;border-radius:30px;font-size:3vh;cursor:hand;font-weight:bold">Submit</button></td></tr>
</form>
</table>
</center>
</div>
</body>
</html>
<?php
  if (isset($_POST['seminar'])){
  	@session_start();
    $client = $_SESSION['client'];
    $tp = $_POST['top'];
    $topic = str_replace("'","''",$tp);
    $bod = $_POST['sem'];
    $body = str_replace("'","''",$bod);
  	$db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  	$qb = mysqli_query($db, "INSERT INTO seminars (Host,Title,Content) VALUES('$client','$topic','$body');");
  	echo '<script>window.location.replace("Seminars.php");</script>';
  }
?>