<?php
session_start();
?>
<html>
<head>
  <title></title> 
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
   <link rel="stylesheet" type="text/css" href="css/animate.css">
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  <nav>
    <div class="toggle">
      <i class='fas fa-bars menu' style='font-size:36px;float:right;color: white;padding:5px;'></i>

      <h3>DCC</h3>
    </div>
    <ul>
      <li><a href="#"><i class='fas fa-home' style='font-size:20px'></i>Home</a></li>
      <li><a href=""target="#about">About</a></li>
      <li><a href="addmission.php">Addmission</a></li>
      <li><a href="#venue">Venue</a></li>
        <li><a href="../quiz1/index.php">Test</a></li>
      <li><a href="#fs">Fee Structure</a></li>
      <li><a href="#">Class Schedule</a></li>
       <li><a href="contact.php">Contact Us</a></li>
       <li style="float:right;background-color:#001f44;display: inline-block;"><a href="..\quiz1\admin\index.php">Admin Login</a></li>
    </ul>
  </nav>
  
  <script src="https://code.jquery.com/jquery-3.4.1.js">
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.menu').click(function(){
      $('ul').toggleClass('active')
    })
  })
</script>
</body>
</html>