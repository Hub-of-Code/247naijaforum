<?php
  @session_start();
  if (!isset($_SESSION['client'])){
    echo '<script>window.location.replace("index.php");</script>';
  }
?>
<html><head>
<script>
    function res(){
      if (document.getElementById("srch").value==""){
         document.getElementById("resul").innerHTML ="";
      }
      else{
         var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
         if (this.readyState==4 && this.status==200){
             document.getElementById("resul").innerHTML = this.responseText;
         }
      };
      var st = document.getElementById("srch").value;
      xhttp.open("GET","Results.php?searchterm="+st,true);
      xhttp.send();
      }
    }
</script>   
<title>Search</title></head>
<meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=0.4">
<body style="background-image:linear-gradient(-60deg,lightgray,white)">
<form action="Search.php" method = "post">
<a href="Home.php"><b><font face="candara" size="4">Back</font></b></a>
<p align="center"><input type="text" id="srch" oninput="res()" style="width:35%;font-size:24px;font-weight:bold;font-family:candara;border-radius:10px;padding-left:10px;padding-right:10px"><input type="button" onclick="res()" style="font-size:24px;border:0;font-weight:bold;font-family:candara;background-color:tomato;color:white;border-radius:10px" value="Search"></p>
</form>
<form action="Search.php" method="post">
<div style="width:80%" id="resul">
  
</div>
</form>
</body>
</html>
<?php
  if (isset($_POST['top'])){
    @session_start();
    $_SESSION['top']=$_POST['top'];
    echo '<script>window.location.replace("Discuss.php");</script>';
  }
  if (isset($_POST['us'])){
    @session_start();
    $_SESSION['contact']=$_POST['us'];
    echo '<script>window.location.replace("View Account.php");</script>';
  }
  if (isset($_POST['news'])){
    @session_start();
    $_SESSION['news']=$_POST['news'];
    echo '<script>window.location.replace("Reader.php");</script>';
  }
  if (isset($_POST['sem'])){
    @session_start();
    $_SESSION['sem']=$_POST['sem'];
    echo '<script>window.location.replace("Read.php");</script>';
  }
  if (isset($_POST['buss'])){
    @session_start();
    $_SESSION['buss']=$_POST['buss'];
    echo '<script>window.location.replace("About.php");</script>';
  }
  if (isset($_POST['ad'])){
    @session_start();
    $_SESSION['ad']= $_POST['ad'];
    echo '<script>window.location.replace("Adverts Result.php");</script>';
  }
?>