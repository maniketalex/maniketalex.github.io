<?php
if (isset($_POST['send'])) {
 	include('../sms/dbcon.php');
 	$name=$_POST['fname'];
 	$email=$_POST['email'];
 	$phone=$_POST['phone'];
 	$select=$_POST['select'];
 	$msg=$_POST['msg'];
 	$sql="INSERT INTO `try`(`id`, `name`, `email`, `phone`, `college`, `message`) VALUES ('NULL','$name','$email','$phone','$select',$msg)";
 	$run=mysqli_query($conn,$sql);
 	if($run==true){
 		?>
 		<script type="text/javascript">
 			alert('Thanks for your feedback');
 		</script>
 		<?php
 	}
 } 
?>