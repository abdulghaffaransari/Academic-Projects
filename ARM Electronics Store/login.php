<?php
require('CONNECTION.INC.PHP');
require('func.inc.php');
$msg='';
if(isset($_POST['submit'])){
echo $username = getsafevalue($con,$_POST['username']);
echo $password = getsafevalue($con,$_POST['password']);
$sql = "select * from admin where username = '$username' and password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_num-rows($res);
if(count>0)
{

}
else
{
$msg="please enter correct details";
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>LOGIN PAGE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body bgcolor="#0A702E" text="#006633">
<div id="Layer1" style="position:absolute; left:422px; top:77px; width:363px; height:504px; z-index:1; background-color: #B52906; layer-background-color: #B52906; border: 1px none #000000; background-image: url(BACKGROUND1.jpg); layer-background-image: url(BACKGROUND1.jpg);">
  <div align="center" >
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <form name="form2" method="post" action="">
      <p>&nbsp;</p>
      <p><font size="+2">Email/Username:</font></p>
      <p><strong><font size="+1">
        <input name="username" type="text" placeholder="username" required>
        </font></strong></p>
    </form>
    <p>&nbsp;</p>
    <form name="form3" method="post" action="">
      <p><font size="+2">password:</font></p>
      <p>
        <input name="password" type="password" placeholder="password" maxlength="8" required>
      </p>
    </form>
  </div>
</div>
<div id="Layer2" style="position:absolute; left:525px; top:462px; width:160px; height:36px; z-index:2">
  <div align="center">
    <form name="form4" method="post" action="">
      <input name="enter" type="submit" id="enter" value="SIGN IN"style="background-color : #96DFA1 ;color: #006666" >
    </form>
	<?php
	echo $msg
	?>
  </div>
</div>
<div id="Layer3" style="position:absolute; left:431px; top:111px; width:345px; height:47px; z-index:3">
  <div align="center"><font size="+5" face="Sitka Banner"><u><strong>LOGIN</strong></u></font>
  </div>
</div>
<p> <img src="ARMlogo.png" width="177" height="74"></p>
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
