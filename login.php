<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
	background-image: url("bg4.jpg");
font: black  }
</style>
<title>login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script>
function check1(){
if(document.ff.una.value=="")
{
alert("please enter the user name");
return false;
}
if(document.ff.upna.value=="")
{
alert("please enter the password");
return false;
}


}
</script>
<style>
input[type="text"],input[type="password"]{
			color:#000000;
			font-family:"Times New Roman", Times, serif;
			font-size:10px;
			width:140px;	
			height:30px;
			border:1px solid #000000;
background-color:#FFFFFF;
			border-radius:1px;
			
	}
	textarea
	{
	color:#000000;
			font-family:"Times New Roman", Times, serif;
			font-size:10px;
			width:260px;	
			height:70px;
			border:1px solid #000000;
background:#ffffff;
color:#000000;
			border-radius:1px;
	}
	input[type="submit"],input[type="reset"]{
			background-color:silver;
			font-family:"tahoma";
			font-size:12px;
			width:100px;	
			height:30px;
			border-radius:1px;
	
	}
</style>	
</head>
<body>

<form name="ff" action="" method="post">
	  
    
	<h2><center>Login Page</h2></center>
	<hr color="red" width="40%"/>
	<center><table border="0" cellpadding="10" cellspacing="10" bgcolor="orange">

	<tr><td><b>User Name<td><input type="text" name="una" /></td></tr>
	<tr><td><b>User Password<td><input type="password" name="upna" /></td></tr>
	
	<tr><td><td><input type="submit" name="LLsub" value="Login" onClick="return check1()"/>
	<input type="reset" value="Clear" /></td></tr>
	
	</table></center>
     
	<?php

if(isset($_POST["LLsub"]))

{
$n1=$_POST["una"];
$p1=$_POST["upna"];
if($n1=="admin" and $p1=="chin123")
{
header('location:view.php');
}

else
{
echo "<script>alert('invalid Login')</script>";
}}

?>
  
 
</body>
</html>

