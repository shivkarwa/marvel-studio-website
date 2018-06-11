<?php

	extract($_POST);
	
	$conn=mysqli_connect("localhost","root","shivkarwa23@","projectdb");
	if(!$conn)
	{
		echo mysqli_connect_error();
		echo "Error";
	}
	else
	{
		$query="Insert into feedback(Name,mail,Phno,Feedback) VALUES ('$name','$mail','$phno','$feedback')";
		mysqli_query($conn,$query);
		echo "<img src=\"marvelstudioslogo.png\">";
		echo "<h1 style=\"text-align:center;margin-top:5%;color:red;font-size:3rem;\">Thank You For Giving Feedback ".$name."</h1>";
		echo "<br/>";
		echo "<a href=\"index.html\">Go to the Home Page</a>";
	}
	
?>

<html>

<head>
	<style>
		img{
			display:block;
			margin-top:3%;
			width:25%;
			margin-left:auto;
			margin-right:auto;
		}
		a{
			font-size:1.5rem;
			text-decoration:none;
			color:green;
			display:block;
			margin-top:10%;
			margin-left:2%;
		}
		a:hover{
			font-weight:bold;
		}
	</style>

</head>

<body>

</body>

<script>
	
	window.onload=setTimeout(function(){window.location.href="intro.html";},5000);
	
</script>

</html>