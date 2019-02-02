<?php
  @session_start();
 if (!isset($_SESSION['client'])){
  echo '<script>window.location.replace("index.php");</script>';
 }
?><html>
<head><title>Job Registration</title></head>
<meta name="viewport" content = "width=device-width,user-scalable=0,initial-scale=0.4">
<script>
   var a = 0;
   var b = 0;
   var v = 0;
   var h = 0;
   function c1(){
     var cc1 = document.getElementById("ch1");
     var cc2 = document.getElementById("ch2");
     var cc3 = document.getElementById("hl");
     if (a == 0){
        cc3.style.visibility= "visible";
        cc3.style.height= "100";
        cc2.checked = false;
     	a = 1;
     }
     else{
        cc3.style.visibility= "hidden";
        cc3.style.height= "0";
     	a = 0;
     }
   }
   function c2(){
     var cc1 = document.getElementById("ch1");
     var cc2 = document.getElementById("ch2");
     var cc3 = document.getElementById("hl");
     if (b == 0){
        cc3.style.visibility= "hidden";
        cc3.style.height= "0";
     	b = 1;
     	a = 0;
     	cc1.checked = false;
     }
     else{
     	cc1.checked = false;
     	b = 0;
     	a = 0;
     }
   }
   function ad(){
   	v++;
   	h = h + 33;
   	var vc1 = document.getElementById("vacant");
    var vc2 = document.getElementById("vc");
    if (v <= 1){
      vc2.value = "Type Here";
      vc2.style.border="1px solid gray";
    }
    else{
      vc2.value += "\rType Here";
    }
    vc1.value = v;
    vc2.style.height = h;
   }
</script>
<body style="margin:0">
  <pre>  <a href="Jobs.php"><font face="candara" size="5" color="cornflowerblue"><b>Back</b></font></a></pre>
  <form action="Job Registration.php" method="post" enctype="multipart/form-data">
  <div style="width:90%;position:relative;left:5%;top:2%;padding-top:30px;padding-bottom:30px">
    <p align="center"><font face="cooper" size="6" color="tomato"><b>Job Registration Form</b></font></p>
    <p align="center"><font face="candara" size="6"><b>Company Logo</b></font></p>
    <p align="center"><font face="sylfaen" size="5" color="hotpink"><b>Image Upload must not exceed 1.5MB</b></font></p>
    <p align="center"><img src="Add.png" style="width:50vw;height:45vw;border-radius:20px" id="cov" name="logo"><input type= "file" style="position:relative;top:-45vw;height:45vw;width:50vw;opacity:0;cursor:hand" name="cover" onchange= "document.getElementById('cov').src= window.URL.createObjectURL(this.files[0]);"></p>
  <table style="width:100%;position:relative;top:-43vw">
    <tr>
  	 <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company Name:   <font face="candara" size="5" color="red">*  </font><input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:450px" name="cn"></b></font></pre></td>
   </tr>
    <tr>
     <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company Street (Address):  <font face="candara" size="5" color="red">*  </font> <input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:450px" name="ca"></b></font></pre></td>
   </tr>
    <tr>
  	 <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company L.G.A:   <font face="candara" size="5" color="red">*  <input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:350px" name="clga"></b></font></pre></td>
   </tr>
    <tr>
     <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company State:   <font face="candara" size="5" color="red">*  <input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:350px" name="cs"></b></font></pre></td>
   </tr>
    <tr>
     <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company Phone(s): <font face="candara" size="5" color="red">*</font>  <input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:350px" name="cp"></b></font></pre></td>
   </tr>
   <tr>
     <td style="padding-bottom:10px;text-align:left"><pre><font face="candara" size="5"><b>    Company Email Address(es): <font face="candara" size="5" color="red">*</font>  <input type="text" style="border-radius:10px;padding-left:10px;padding-right:10px;font-family:candara;font-size:24px;width:350px" name="ce"></b></font></pre></td>
   </tr>
    <tr>
    <td style="padding-top:10px">
      <pre><font face="candara" size="5"><b>    Company Description  <font face="candara" size="5" color="red">*</font></b></font></pre>
   </td>
   </tr>
    <tr>
    <td style="padding-top:10px;padding-bottom:20px">
      <pre>   <textarea style="border:1px solid gray;width:90%;height:100px;font-family:candara;font-size:25px;border-radius:20px;padding:10px" name="cd" maxlength="1500"></textarea></pre>
   </td>
   </tr>
   <tr>
  	  <td><pre><font face="candara" size="5"><b>    Do you have an application webpage for your Job?  <font face="candara" size="5" color="red">*</font></b></font></pre></td>
   </tr>
   <tr>
      <td><pre><font face="candara" size="5"><b>    <input type="checkbox" id = "ch1" onclick="c1()" name="yes"> Yes      <input type="checkbox"  id = "ch2" onclick="c2()" name="no"> No </b></font></pre></td>
   </tr>
   <tr><td>
   	<div style="height:0;width:90%;visibility:hidden;position:relative;left:20px" id="hl">
   	   <p style="padding-top:30px"><font face="candara" size="5" color="tomato"><b>Enter Link:</b></font></p>
   	   <p><input type="text" style="width:350px;border-radius:10px;font-family:candara;color:cornflowerblue;font-size:24px;font-weight:bold;padding-left:10px;padding-right:10px" name = "blink" placeholder="Enter full URL">
   	   </p>
    </div>
   </td></tr>
   <tr>
   	<td style="padding-top:24px">
   	  <pre><font face="candara" size="5" color="tomato"><b>    Vacant Positions </b></font>  <input type="label" name="vacancies" id="vacant" style="border-radius:10px;padding-left:10px;padding-right:10px;visibility:visible;width:60px;text-align:center;font-family:candara;font-size:25px;font-weight:bold;color:tomato;border:1px solid lightgray;background-image:linear-gradient(60deg,lightgray,white)" readonly="readonly" value="0"></pre>
   </td>
   </tr>
   <tr>
   	<td>
   		<pre>   <textarea  name="vp" id = "vc" style="border:0;width:550px;height:0px;font-family:candara;font-size:25px;font-weight:bold"></textarea></pre>
   	</td>
   </tr>
   <tr><td><pre>   <input type="button" style="color:white;padding-left:10px;padding-right:10px;font-family:candara;border-radius:10px;background-color:tomato;font-size:21px;font-weight:bold;cursor:hand" onclick="ad()" value="Add"></pre></td></tr>
   <tr><td style="padding-top:20px"><div style="width:40vw;float:left">
   <p align="center">
   <table>
    <tr>
      <td><pre>    <font face="candara" size="5"><b>Corporate Affairs Certificate  <font face="candara" size="5" color="red">*</font></b></font></pre></td>
    </tr>
    <tr><td style="text-align:center"><pre>    <font face="candara" size="4" color="hotpink"><b>PDF File Only</b></font></pre></td></tr>
    <tr><td style="text-align:center"><input type="file" name="doc1" id="do1" onchange="document.getElementById('f1').value = 'File Uploaded'" style="color:maroon;font-size:15px"></td></tr>
    <tr><td style="text-align:center"><input type="button" style="width:300px;height:350px;background-color:tomato;border:2px solid gold;font-size:30px;color:white;font-family:sylfaen;font-weight:bold" value="File not Chosen" id="f1"></td></tr>
  </table>
  </p>
  </div>
  <div style="width:40vw;float:right">
    <p align="center">
   <table>
  </table>
  </p>
  </div>
  <tr><td style="padding-top:50px"> <p align ="center"><font face="candara" size="5"><b>You will receive an approval email or call within 24 hours</b></font></p></td></tr>
  <tr><td colspan="2" style="text-align:center;padding-left:10px;padding-top:10px"><input type="submit" name="submit" style="padding-left:10px;padding-right:10px;font-family:candara;font-size:25px;font-weight:bold;border-radius:20px;background-color:tomato;color:white;cursor:hand;border:2px solid gold" value="Submit"></td></tr>
  </table>
  </div>
  </form>
 </body>
</html>
<?php
if (isset($_POST['submit'])){
   if (isset($_FILES['cover'])){
    if (isset($_FILES['doc1'])){
        $d1 = $_FILES['doc1']['name'];
        $c = $_FILES['cover']['name'];
        $c_tmp_name = $_FILES['cover']['tmp_name'];
        $d1_tmp_name = $_FILES['doc1']['tmp_name'];
        $target = 'Jobs/';
        $doc1 = $target.$d1;
        $cover = $target.$c;
        move_uploaded_file($d1_tmp_name, $doc1);
        move_uploaded_file($c_tmp_name, $cover);
        $cnn = $_POST['cn'];
        $cn = str_replace("'","''",$cnn);
        $ca = $_POST['ca'];
        $clga = $_POST['clga'];
        $cs = $_POST['cs'];
        $cp = $_POST['cp'];
        $ce = $_POST['ce'];
        $cdd = $_POST['cd'];
        $cd = str_replace("'", "''", $cdd);
        $vp = $_POST['vacancies'];
        $vacs = $_POST['vp'];
        $vac = str_replace("'","''",$vacs);
        if (isset($_POST['yes'])){
          @session_start();
          $hs = $_SESSION['client'];
          $blink = $_POST['blink'];
          $db1 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
          $q1 = mysqli_query($db1, "INSERT INTO jb (cover_photo, host, approved, company_name, company_address, company_lga, company_state, company_phone, company_email, company_description, document, link, vacancy, vp) VALUES ('$cover','$hs','false','$cn','$ca','$clga','$cs','$cp','$ce','$cd','$doc1','$blink','$vac',$vp)");
          echo '<script>alert("Successfully Submitted");</script>';
          echo '<script>window.location.replace("Jobs.php");</script>';
        }
       else{
          @session_start();
          $hs = $_SESSION['client'];
          $db2 = mysqli_connect('localhost','naijafo6_elzucky','danielpatrick','naijafo6_jobs');
          $q1 = mysqli_query($db1, "INSERT INTO jb (cover_photo, host, approved, company_name, company_address, company_lga, company_state, company_phone, company_email, company_description, document, link, vacancy, vp) VALUES ('$cover','$hs','false','$cn','$ca','$clga','$cs','$cp','$ce','$cd','$doc1','false','$vac',$vp)");
          echo '<script>alert("Successfully Submitted");</script>';
          echo '<script>window.location.replace("Jobs.php");</script>';
        }
      }
  }
}
?>