<html>
<head>
<title>VIP Account</title>
</head>
<meta name="viewport" content="initial-scale=0.4,user-scalable=0">
<body style="margin:0">
	<p align="center" style="position:relative;top:5%;padding-left:40px"><font face="candara" size="6" color="goldenrod"><b>Create a VIP Account</b></font></p>
  <div style="width:50vw;position:relative;left:25vw;background-color:lightgray;padding-top:5px;padding-bottom:40px;top:15%;border-radius:30px;padding-left:20px;padding-right:20px">
  <center>
  <table style="width:100%">
  <tr><td style="text-align:center" colspan="2">
  <form action="regular.php" method="post" enctype="multipart/form-data">
  <img id ="prof" src="account2.png" style="border-radius:50%;height:150px;width:150px;position:relative;top:-80px">
  </td></tr>
  <tr><td style="text-align:center" colspan="2"><button style="position:relative;top:-80px;background-color:goldenrod;color:white;border-radius:50px;font-weight:bold;font-size:20px;cursor:hand">Choose Photo
  <input type="file" name= "upload" accept="image/*" onchange="document.getElementById('prof').src= window.URL.createObjectURL(this.files[0]);" style="opacity:0;position:absolute;left:-40px;top:0;cursor:hand"></button></td></tr>
  	  <tr>
        <td style="text-align:right">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:goldenrod">Name: </label>
        </td>
         <td style="text-align:left;padding-left:25px">
          <input type="text" name="cl" placeholder="First and Second" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
  	  <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:goldenrod">Email Or Phone: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <input type="text" name="emailph" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
       <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:goldenrod">Password: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <input type="password" name="pass" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:90%;padding-left:5px;padding-right:10px">
        </td>
      </tr>
       <tr>
        <td style="text-align:right;padding-top:20px">
          <label style="font-family:candara;font-size:2vw;font-weight:bold;color:goldenrod">Gender: </label>
        </td>
         <td style="text-align:left;padding-top:20px;padding-left:25px">
          <select name="gender" style="font-family:candara;font-size:25px;font-weight:bold;border-radius:10px;width:50%;padding-left:5px;padding-right:10px">
          	<option>Male</option>
          	<option>Female</option>
          </select>
        </td>
      </tr>
      <tr><td colspan="2" style="text-align:center;padding-top:40px">
          <button type="submit" id="vi" name="vipaccount" style="padding:10px;color:khaki;background-color:white;font-family:candara;font-size:25px;height:8vh;border:2px solid gold;border-radius:20px;font-weight:bold;cursor:hand">Proceed to Payment</button>
      </td></td></tr>
    </table>
  </center>
  </div>
</form>
</body>