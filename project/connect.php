<?php
$firstname=$_post['firstname'];
$lastname=$_post['lastname'];
$email=$_post['email'];
$cemail=$_post['cemail'];
$password=$_post['password'];
$cpassword=$_post['cpassword'];
$option=$_post['option'];
$mobileno=$_post['mobileno'];
//Database Connection
$conn=new mysqli('localhost','root@localhost','YES','test');
if($conn->connect_error){
}else{
	$stmt=$conn->prepare("insert into registration('firstname,lastname,email,cemail,password,cpassword,option,mobileno')values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("issssssii",$id,$firstname,$lastname,$email,$cemail,$password,$cpassword,$option,$mobileno);
	$stmt->execute();
	echo "Thank you for register on my site";
	$stmt->close();
	$conn->close();
}
?>
