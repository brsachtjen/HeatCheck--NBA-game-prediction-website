<?php
$email = $_POST['email'];
if($email)
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
		}
		if(!strcasecmp($email, $dbemail))
		{
			header("Location: signup1_2.html");
		}
		else 
			header("Location: signup2.html");
	}
	else 
		header("Location: signup2.html");
}
else 
   die("enter something!");
?>