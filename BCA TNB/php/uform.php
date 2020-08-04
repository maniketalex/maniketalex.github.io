<?php 
session_start();
include('header.php');
if(isset($_POST['submit'])){
	include'dbcon.php';
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$mobno=$_POST['mobno'];
	$fatname=$_POST['fatname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$caste=$_POST['caste'];
	$cadd=$_POST['cadd'];
	$padd=$_POST['padd'];
	/*$filesize=$_FILES['usrimg']['size'];
    $filetype=$_FILES['usrimg']['type'];
	$usrimg=$_FILES['usrimg']['name'];
	$temp=$_FILES['usrimg']['tmp_name'];
	$usrimg=$_FILES['sfile']['name'];
	$tempsig=$_FILES['sfile']['tmp_name'];
	move_uploaded_file($temp,"usrimage/$usrimg");
	move_uploaded_file($tempsig,"usersign/$usrsig");*/
	$sql="INSERT INTO `s_info`(`id`, `full_name`, `email`, `mobileno`, `father_name`, `dob`, `gender`, `category`, `current_address`, `permanent_address`, `photo`, `signature`, `check`) VALUES (NULL,'$fname','$email','$mobno','$fatname','$dob','$gender','$caste','$cadd','$padd')";
	$query=mysqli_query($conn,$sql);
	if($conn->query($sql) == true){
		echo"data inserted successfully";
	}else{
		echo'something went wrong';
	}

}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/uform.css">
</head>
<body>
	
	<div class="form"style="padding:80px;border:2px black;">
		<center>
		<h3>Apply for take addmission in  BCA session(2020-2023)</h3>
	</center>
	<form action="uform.php"method="post"enctype="multicart/form-data">
	<h4 style="padding: 20px;">Persnol Details:</h4>
	<div class="row"style="padding:20px;">

		<div class="col-sm-4 mb-2">
			<label>Full Name:</label>
			<input type="text" name="fname"placeholder="Full Name"class="form-control">
		</div>
		<div class="col-sm-4 mb-2">
			<label>Email:</label>
			<input type="email" name="email"placeholder="Email"class="form-control">
		</div>
		<div class="col-sm-4 mb-2">
			<label>Mobile:</label>
			<input type="text" name="mobno"placeholder="mobile no"class="form-control">
		</div>
	</div>
	<div class="row"style="padding:20px;">

		<div class="col-sm-3 mb-2">
			<label>Father's name</label>
			<input type="text" name="fatname"placeholder="Father's name"class="form-control">
		</div>
		<div class="col-sm-3 mb-2">
			<label>Date of Birth:</label>
			<input type="date" name="dob"placeholder="Email"class="form-control">
		</div>
		<div class="col-sm-3 mb-2">
			<label>Gender:</label>
			<select class="form-control"name="gender">
				<option value="select">--------select-----</option>
				<option value="m">Male</option>
				<option value="f">Female</option>
			</select>
		</div>
		<div class="col-sm-3 mb-2">
			<label>Category:</label>
			<select class="form-control"name="caste">
				<option>--------select------</option>
				<option value="gen">GEN</option>
				<option value="bc">BC</option>
				<option value="st">ST</option>
				<option value="sc">SC</option>
				<option value="ph">Physically handicaped</option>
			</select>
		</div>
	</div>
	<div class="row"style="padding:20px;">
		<div class="col-sm-6 mb-2">
			<label>Current Address:</label>
			<textarea type="textarea" class="form-control"name="cadd"placeholder="Enter Current Address"rows="5"cols="10"></textarea>
		</div>
		<div class="col-sm-6 mb-2">
			<label>Permanent address:</label>
			<textarea type="textarea" class="form-control"name="padd"placeholder="Enter Current Address"rows="5"cols="10"></textarea>
		</div>
	</div>
	<div class="row"style="padding:20px;">
		<div class="col-sm-12">
			<h3>Qualification Details:</h3>
		<p>Details of passing/appearing in I.Sc or other equivalent examination(Attach copy of marks sheet)</p></div>
	</div>
	<div class="col-sm-12"style="padding:20px;">
	<table class="table"style="padding: 20px;">
  <thead class="black white-text">
    <tr>
      <th scope="col">Name of exam</th>
      <th scope="col">Name of Board</th>
      <th scope="col">Year of passing</th>
      <th scope="col">Full Marks</th>
      <th scope="col">Obtained Marks</th>
      <th scope="col">Percentage</th>
      <th scope="col">Division</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10th</th>
      <td><select class="form-control">
      	<option>-----select----</option>
      	<option>BSEB</option>
      	<option>JAC</option>
      	<option>ICSE</option>
      	<option>CBSE</option>
      </select></td>
       <td><select class="form-control">
      	<option>-----select----</option>
      	<option>2020</option>
      	<option>2019</option>
      	<option>2018</option>
      	<option>2017</option>
      	<option>2016</option>
      	<option>2015</option>
      	<option>2014</option>
      	<option>2013</option>
      	<option>2012</option>
      	<option>2011</option>
      	<option>2010</option>
      </select></td>
      <td><input class="form-control"type="text" name=""placeholder="Full Marks"></td>
      <td><input type="text" name=""class="form-control"placeholder="Obtained marks"></td>
      <td><input type="text" name=""class="form-control"placeholder="Percentage"></td>
      <td><input type="text" name=""class="form-control"placeholder="Division"></td>
    </tr>
      <th scope="row">12th(I.Sc)</th>
    <td><select class="form-control">
      	<option>-----select----</option>
      	<option>BSEB</option>
      	<option>JAC</option>
      	<option>ICSE</option>
      	<option>CBSE</option>
      </select></td>
       <td><select class="form-control">
      	<option>-----select----</option>
      	<option>2020</option>
      	<option>2019</option>
      	<option>2018</option>
      	<option>2017</option>
      	<option>2016</option>
      	<option>2015</option>
      	<option>2014</option>
      	<option>2013</option>
      	<option>2012</option>
      	<option>2011</option>
      	<option>2010</option>
      </select></td>
       <td><input class="form-control"type="text" name=""placeholder="Full Marks"></td>
      <td><input type="text" name=""class="form-control"placeholder="Obtained marks"></td>
      <td><input type="text" name=""class="form-control"placeholder="Percentage"></td>
      <td><input type="text" name=""class="form-control"placeholder="Division"></td>
    </tr>
  </tbody>
</table>
</div>
<h4 style="padding: 20px;">Upload Photo and signature:</h4>  
<div class="row"style="padding: 20px;">
	
	<div class="col-sm-6">
		<label>Upload Passport size photo:</label>
		<input type="file" name="usrimg"placeholder="upload photo"class="">
	</div>
	<div class="col-sm-5">
		<label>Upload Signature</label>
		<input type="file" name="usrsig"placeholder="upload signature">
	</div>
</div>
	<div class="row"style="padding:20px;">
		<div class="col-sm-12">
			<h5>Declaration of candidate:</h5>
		</div>
	</div>
	<div class="row"style="padding:20px;">
		<div class="col-sm-1">
			<input type="checkbox" name="check">
		</div>
		<div class="col-sm-11">
			<p>I hereby declare that the information furnished in this application is true and i shall forfoit my cadidature as well as will be liable for legal action in any case any information is found to be false at any stage of addmission or thereafter.</p>
		</div>
	</div>
	<center>
		<div class="row pb-4"style="padding: 20px;">
			<div class="col-sm-3 center">
			<button type="submit"class="form-control btn-info mb-2"name="submit">Submit</button>
		</div>
		<div class="col-sm-3">
			<button type="reset"class="form-control btn-warning">Reset</button>
		</div>
	</div>
		
</center>
</form>
</div>
<?php 
  include 'footer.php';
  ?>
</body>
</html>