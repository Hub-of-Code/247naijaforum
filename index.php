<?php
 @session_start();
 $_SESSION['client']="";
 $_SESSION['pic'] = "";
?><html>
<head>
<meta name="description" content="247 Naija Forum is an online platform that helps you connect with millions of youths around the world and share all forms of ideas and information">
<meta name="google-site-verification" content="fzXfylkRGevvC1cTFD5E_vxEwW5A-5Iwn-oLeV-CmVA" />
<meta name="msvalidate.01" content="FDB4EF2904208888CFCC9C48BF300F9E" />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9246236177173933",
          enable_page_level_ads: true
     });
</script>
<title>247Naija Home</title>
</head>
<script>
var o=0;
var p=0;
var op=0;
var ch=1;
function t(){
 window.location.replace('index.php');
}
function si(){
 document.getElementById("signin").style.visibility="visible";
 document.getElementById("signup").style.visibility="hidden";
 var z = setInterval(function(){
   if (o < 1){
    o = o+0.1;
   }
   var x = document.getElementById("signin");
   x.style.opacity=o;
 },50);
}
function su(){
 document.getElementById("signup").style.visibility="visible";
 document.getElementById("signin").style.visibility="hidden";
  var z = setInterval(function(){
   if (p < 1){
    p = p+0.1;
   }
   var x = document.getElementById("signup");
   x.style.opacity=p;
 },50);
}
function im(){
  document.getElementById("ima").style.opacity=1;
  var oo = setInterval(function(){
  nx();
  clearInterval(oo);
  },5000);
}
function nx(){
  var inter= setInterval(function(){
    var i = document.getElementById("ima");
    op = op + 1;
    if (op==1){
      i.style.opacity=0.9;
    }
    if (op==2){
      i.style.opacity=0.7;
    }
    if (op==3){
      i.style.opacity=0.5;
    }
    if (op==4){
      i.style.opacity=0.3;
    }
    if (op==5){
      i.style.opacity=0.1;
    }
    if (op==6){
    i.style.opacity=0;
    var m = document.getElementById("ima");
    ch++;
    if (ch==1){
    m.src="youth1.png";
    }
    if (ch==2){
    m.src="youth2.png";
    }
    if (ch==3){
    m.src="youth3.png";
    }
    if (ch==4){
    m.src="youth4.png";
    }
    if (ch==5){
    m.src="5.png";
    ch=0;
    }
    op = 1;
    im();
    clearInterval(inter);
    }
  },200);
}
</script>
<meta name="viewport" content="initial-scale=0.4,user-scalable=0,width=device-width">
<body style="margin:0" onload="im();">
<div class="msg-wgt-header" style="height:100px;width:100vw;background-color:tomato">
<table style="width:100%;max-height:100%;height:100%">
<tr>
<td style="padding-left:5vw;width:50%;text-align:left"><img src="247Naija.png" style="width:250px;height:80px" alt="247naija logo"></td>
<td style="padding-left:10vw;width:25%;text-align:right"><input type="button" style="color:tomato;background-color:white;font-family:candara;font-size:24px;border:2px solid white;border-radius:20px;font-weight:bold;cursor:hand;padding-left:20px;padding-right:20px;padding-top:3px;padding-bottom:3px" value="SIGN IN" onclick="si()"></td>
<td style="padding-left:10vw;width:25%;text-align:left;padding-right:20px"><input type="button" style="color:white;background-color:tomato;font-family:candara;font-size:24px;border:2px solid white;border-radius:20px;font-weight:bold;cursor:hand;padding-left:20px;padding-right:20px;padding-top:3px;padding-bottom:3px" value="SIGN UP" onclick="su()"></td>
</tr>
</table>
</div>
<img src="youth1.png" alt="adverts" id ="ima" style="height:480px;width:100vw">
<div class="msg-wgt-body" style="width:100vw">
<div style="float:left;width:56%;height:100%">
  <center>
  <table style="width:100%;padding-top:5vh">
    <tr><td colspan="2" style="width:100%;font-weight:bold;text-align:center;font-weight:bold;color:maroon;text-shadow:gray 2px 2px 1px"><font face="candara" size="7">Why You Need 247Naija Forum</td></tr>

  <tr>
    <td style="width:25%;padding-top:20px">
    <img src="connect.png" style="width:100%;border-radius:50%;border:2px solid lightgray;height:150px">
    </td>
    <td style="padding-top:20px;padding-left:10px;text-align:justify">
    <font face="candara" size="6" color="tomato"><b>You can connect with millions of youths across the globe.
    </b></td>
  </tr>
   <tr>
    <td style="width:25%;padding-top:10px">
    <img src="vip.png" style="width:100%;border-radius:50%;border:2px solid lightgray;height:150px">
    </td>
    <td style="padding-top:10px;padding-left:10px;text-align:justify">
    <font face="candara" size="6" color="tomato"><b>You can own a VIP Account for adverts, advanced operations and Outreach.
    </b></td>
  </tr>
  <tr>
    <td style="width:25%;padding-top:10px">
    <img src="orientation.png" style="width:100%;border-radius:50%;border:2px solid lightgray;height:150px">
    </td>
    <td style="padding-top:10px;padding-left:10px;text-align:justify">
    <font face="candara" size="6" color="tomato"><b>You will be oriented on various facts and resourceful ideologies through seminars, articles and discussions.
    </b></td>
  </tr>
   <tr>
    <td style="width:25%;padding-top:10px">
    <img src="job.png" style="width:100%;border-radius:50%;border:2px solid lightgray;height:150px">
    </td>
    <td style="padding-top:10px;padding-left:10px;text-align:justify">
    <font face="candara" size="6" color="tomato"><b>You can find jobs around the nation or register yours at <strike>N</strike>500.
    </b></td>
  </tr>
  <tr>
    <td style="width:25%;padding-top:10px">
    <img src="news.jpg" style="width:100%;border-radius:50%;border:2px solid lightgray;height:150px">
    </td>
    <td style="padding-top:10px;padding-left:10px;text-align:justify">
    <font face="candara" size="6" color="tomato"><b>You can read latest News from all around the globe with ease. 
    </b></td>
  </tr>
  <tr style="text-align:center"><td  colspan="2" style="padding-top:45px"><font size="6" face="tahoma" color="green"><b>
  	<?php
  	  $dbbb = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
  	  $qbbb = mysqli_query($dbbb, "SELECT * FROM members");
  	  $cbb = mysqli_num_rows($qbbb);
  	  echo '• '.$cbb.' Members';
  	?>
  </b></font></td></tr>
  </table>
  </center>
</div>
<div style="float:right;width:40%;height:100%">
   <center>
  <table style="width:100%;padding-top:5vh">
    <tr><td style="width:95%;font-weight:bold;text-align:center;text-shadow:gray 2px 2px 1px;font-weight:bold;padding-right:30px"><font face="candara" size="7" color="maroon">Trending News</td></tr></table>
<table style="padding-right:30px;float:right;width:95%;border-radius:20px;position:relative;top:20px">
    <?php
     $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_news');
     $q = mysqli_query($db,"SELECT * FROM latest ORDER BY id DESC LIMIT 4");
     while ($ro = mysqli_fetch_array($q)){
      $title = $ro['title'];
      $cover = $ro['cover'];
      $cnn = strlen($title);
      ?>
     <tr>
      <td style="padding-top:20px;width:100%;text-align:center"><img title="<?php echo $title; ?>" src="<?php echo $cover; ?>" style="height:240px;width:100%;border-radius:20px"></td>
      </b></td>
      </tr>
      <tr>
      <td style="text-align:center"><font face="candara" size="5" color="brown"><b>
      <?php 
      if ($cnn <= 35){
       $title = $ro['title'];
      }
      else{
       $title = substr($ro['title'],0,35)." ...";
      }
      echo $title; ?>
      </tr>
      <?php
      }
      ?>
  </table>

</div>
</div>
<div id="signin" style="visibility:hidden;position:absolute;top:20%;opacity:0;border-radius:30px;left:30vw;background-color:white;border:5px solid gold;padding-left:20px;padding-right:10px;padding-bottom:50px">
  <center>
    <table style="padding-top:20px">
      <form action="index.php" method="post">
      <tr>
      <td style="text-align:right" colspan="2"><input type="button" style="color:tomato;background-color:white;font-family:candara;font-size:3vh;border:2px solid tomato;border-radius:20px;font-weight:bold;cursor:hand" value="X" onclick="t()"></td>
      </tr>
      <tr><td style="font-family:candara;font-size:300%;font-weight:bold;color:tomato;text-align:center" colspan="2">Sign In</td></tr>
      <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Email Or Phone: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:20px">
          <input type="text" name="emailph" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:10px;padding-right:10px">
        </td>
      </tr>
       <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:tomato">Password: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:20px">
          <input type="password" name="pass" style="font-family:candara;font-size:20px;height:3vw;font-weight:bold;border-radius:10px;width:90%;padding-left:10px;padding-right:10px">
        </td>
      </tr>
      <tr><td colspan="2" style="text-align:center;padding-top:30px"><input type="submit" name="signin" style="width:30%;height:45px;color:white;background-color:tomato;font-family:candara;font-size:24px;border:2px solid white;border-radius:20px;font-weight:bold;cursor:hand" value="SIGN IN"></td></tr>
      <tr><td colspan="2" style="text-align:center;padding-top:30px"><font face="candara" size="5" color="tomato">Don't have an Account?</td></tr>
      <tr><td colspan="2" style="text-align:center;padding-top:30px"><a onclick="su()" style="text-decoration:underline;cursor:hand"><font face="candara" size="5" color="tomato">Sign Up</font></a></td></tr>
      </form>
    </table>
  </center>
</div>
<div id="signup" style="visibility:hidden;position:absolute;top:20%;opacity:0;border-radius:30px;left:30vw;background-color:white;border:5px solid gold;padding-left:20px;padding-right:10px;padding-bottom:50px;width:40vw">
  <center>
    <table style="padding-top:20px;width:100%">
      <form action="index.php" method="post">
      <tr>
      <td style="text-align:right" colspan="2"><input type="button" style="color:tomato;background-color:white;font-family:candara;font-size:3vh;border:2px solid tomato;border-radius:20px;font-weight:bold;cursor:hand" value="X" onclick="t()"></td>
      </tr>
      <tr><td style="font-family:candara;font-size:300%;font-weight:bold;color:tomato;text-align:center" colspan="2">Create Account</td></tr>
      <tr>
      <td colspan="2" style="padding-top:20px"><input type="submit" name="regular" style="width:100%;height:45px;color:tomato;background-color:white;font-family:candara;font-size:25px;height:8vh;border:2px solid tomato;border-radius:20px;font-weight:bold;cursor:hand" value="REGULAR"></td>
      </tr>
       <tr>
      <td colspan="2" style="padding-top:20px"><button type="submit" name="vipaccount" id="vi" style="width:100%;height:45px;color:tomato;background-color:white;font-family:candara;font-size:25px;height:8vh;border:2px solid tomato;border-radius:20px;font-weight:bold;cursor:hand">VIP (Free)</button></td>
      </tr>
      </form>
    </table>
  </center>
</div>
<div style="position:absolute;left:0px;top:2100px;width:100%;height:100px;background-color:black">
<table style="height:100%;width:100%;padding-left:40px">
<tr>
<td style="color:white;font-family:candara;font-size:25px;font-weight:bold;text-align:right">
<a href="Terms.html" style="color:white">Terms and Conditions</a>
</td>
<td style="color:white;font-family:candara;font-size:25px;font-weight:bold;text-align:center">&#9743
<a href="Contact Us.html" style="color:white">Contact Us</a>
</td>
</tr>
</table>
</div>
</body>
</html>
<?php
 if (isset($_POST['signin'])){
   @session_start();
   $db = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_naija');
   $emph = mysqli_real_escape_string($db,$_POST['emailph']);
   $pas = mysqli_real_escape_string($db,$_POST['pass']);
   $q = mysqli_query($db, "SELECT * FROM members WHERE Email_phone = '$emph' AND Password='$pas'");
   $num = mysqli_num_rows($q);
   if ($num==0){
    echo '<script>alert("Invalid Email Address or Password!");</script>';
    echo '<script>window.location.replace("index.php");</script>';
   }
   else{
    @session_start();
    $_SESSION['client']= $emph;
    $q2 = mysqli_query($db, "SELECT Type FROM members WHERE Email_phone = '$emph' AND Password='$pas'");
    while($ro = mysqli_fetch_array($q2)){
      $act = $ro['Type'];
      $nm = $ro['nm'];
      $pic = $ro['Profile_pic'];
    }
    $_SESSION['accounttype']=$act;
    echo '<script>window.location.replace("Home.php");</script>';
   }
 }
 if (isset($_POST['regular'])){
   echo '<script>window.location.replace("regular.php");</script>';
 }
 if (isset($_POST['vipaccount'])){
   echo '<script>window.location.replace("regular.php");</script>';
 }
?>