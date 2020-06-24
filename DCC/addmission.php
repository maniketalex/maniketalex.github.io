<?php
session_start();
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>addmission</title>
	<link rel="stylesheet" type="text/css" href="css/addmission.css">
</head>
<body>
	<center>
		<div class="form">
		<h1>Addmission</h1>
		<div class="flex">
		<form>
			<input type="text" name="fname"placeholder="First  Name"><br>
			<input type="text" name="fname"placeholder="Last Name"><br>
			<input type="email" name="fname"placeholder="Enter Email"><br>
			<input type="text" name="phone"placeholder="Enter phone"><br>
			<select>
				<option value="-----SELECT------"placeholder="select College">---------Select College---------</option>
				<option value="T.N.B College">T.N.B College</option>
				<option value="Marwari College">Marwari College</option>
				<option value="SM College">SM College</option>
				<option value="BIO Informatics">BIO Informatics</option>
			</select><br>
			<select>
				<option value="-----SELECT------">---------Select Session---------</option>
				<option value="20-23">2020-2023</option>
				<option value="19-22">2019-2022</option>
				<option value="18-21">2018-2021</option>
				<option value="17-20">2017-2020</option>
			</select><br>
			<input type="password" name="pass"placeholder="Password"><br>
			<input type="password" name="cpass"placeholder="Confirm Password"><br>
			<button type="submit"name="submit">Submit</button>
		</form>
	</div>
	</div>
	</center>

</body>
</html>

?>