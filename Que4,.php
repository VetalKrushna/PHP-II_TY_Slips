<html>
<body>
<form method="POST" action="#">
Enter username:<input type="text" name="user"><br>
Enter password:<input type="text" name="pass"><br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
if(isset($_SESSION['count']))
{
	if($user=="admin" && $pass=="admin123" && $_SESSION['attempt']<=3)
	{
		 header("Location:welcome.php");
	}//for secondd and third attempt
	else if($_SESSION['attempt']<=3)
	{
		echo "error occured!!";
		$_SESSION['attempt']++;	
	}//attempt are okay but not puuting coorect user or pass
	else
	{
		echo "reached maximum attempts!!";
	}
}
else
{
	$_SESSION['count']=1;
	$_SESSION['attempt']=1;
	if($user=="admin" && $pass=="admin123" && $_SESSION['attempt']<=3)
	{
		 header("Location:welcome.php");
	}//for first time  matching , philya attempt mdhe jr right tkla tr
}
?>