<?php
session_start();
extract($_REQUEST);
if(isset($Submit))
{
	if($capd==$_SESSION['cap'])
	{
	$_SESSION['n']=$name;
	$_SESSION['m']=$mobile;
	$_SESSION['e']=$email;
	header("location: welcome.php");
	exit();
	}else
	{
		echo "invalid text";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript">
function valid()
{
	var n=/^[0-9]+$/;
	var c=/^[a-z A-Z]+$/;
	var e=/^\w*\@\w*\.\w*$/;
	if(document.feedback.name.value.search(c)==-1)
	{
		alert("please enter valid name");
		document.feedback.name.focus();
		return false;
	
	}

	if(document.feedback.mobile.value.search(n)==-1)
	{
		alert("please enter valid mobile no.");
		document.feedback.mobile.focus();
		return false;
	
	}
	if(document.feedback.email.value.search(e)==-1)
	{
		alert("please enter valid email id");
		document.feedback.email.focus();
		return false;
	
	}
	}
</script>
</head>

<body>
<form action="" method="post" name="feedback" onsubmit="return valid()">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Feedback Form </strong></div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label>
      <input type="text" name="mobile" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
      <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><label>
        <textarea name="feedback"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p><img src="captcha.php" />&nbsp; </p></td>
      <td><label>
        <input type="text" name="capd" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>

</form>
</body>
</html>

