<!DOCTYPE html>
<html>
<head>
	<title>Index.php</title>
	<style type="text/css">
		body{
			background-color: #f1f1f1;
		}
		p{
			color:red;
		}
		h3{
			color:green;
		}
		a{
			padding: 10px;
			background-color: red;

		}
		a:hover{
			cursor:pointer;
		}
		.feedback{
			width: 40%;
			background-color: white;
			padding:20px;
		}
		div:hover{
			box-shadow: 5px 12px 5px 4px rgba(0,0,0,0.2);
		}
	</style>
</head>
<body>
	<center>
	<div class="feedback">
	
	<?php 
	 echo"<h1>Welcome </h1>";
	 echo $_POST["fname"];
	 echo "<h3>Your Email is:</h3>";	 
	 echo $_POST["email"];
	 echo "<h3>Your phone no is:</h3>";
	 echo $_POST["phone"];
	 echo "<h3>Your college name is:</h3>";
	 echo $_POST["select"];
	 echo "<h3>Your feedback is:</h3>";
	 echo $_POST["msg"];
	 echo "<p> Thanks for your feedback I will work on your feedback soon...</p> ";
	
	?>
</div>
</center>

</body>
</html>