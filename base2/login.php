<?php
$email = $_POST['email2'];
$password = $_POST['password2'];

if($email&&$password)
{
	$connect = mysqli_connect("localhost","root","")or die("couldnt connect");
	mysqli_select_db($connect, "MyUsers") or die("couldnt connect ");

	$query = mysqli_query($connect, "SELECT * FROM yusers WHERE Email='$email'");

	$numrows = mysqli_num_rows($query);
	if($numrows != 0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbemail = $row['Email'];
			$dbpassword = $row['Password'];
			$dbname = $row['FullName'];
		}
		if(!strcasecmp($email, $dbemail) && $password == $dbpassword)
		{
			session_start();

			$_SESSION['FullName'] = $dbname;
			header("Location: member.php");
			//echo "you are logged in!". $_SESSION['FullName'];
		}
		else 
			header("Location: signin2.html");
	}
	else 
		header("Location: signin3.html");
}
else 
   die("enter something!");
?>