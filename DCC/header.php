<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
  <link rel="icon" href="img" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/navbar.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>
  <nav>
    <div class="toggle">
      <i class='fas fa-bars menu' style='font-size:36px;float:right;color: white;padding:5px;'></i>

      <h3>DCC</h3>
    </div>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href=""target="#about">About</a></li>
      <li><a href="addmission.php">Addmission</a></li>
      <li><a href="#venue"target="#venue">Venue</a></li>
        <li><a href="#">Test</a></li>
      <li><a href="#">Fee Structure</a></li>
      <li><a href="#">Class Schedule</a></li>
       <li><a href="#git">Contact Us</a></li>
       <li style="float:right;"><a href="#">Admin Login</a></li>
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