<!DOCTYPE html>
<html>
<head>
	<title>login.php</title>
	<style type="text/css">
		body{
			margin: auto;
			width: 100%;
		}
		h1{
			color:white;
			background-color: blue;
			padding:10px;
			font-family: verdana;
			margin-top: 0px;
		}
		.span{
			float:right;
		}
	</style>
</head>
<body>
	<center>
		<h1>Welcome <?php echo $_POST["username"];?><span class="span"><button>Logout</button></span></h1>
	</center>

</body>
</html>