<head>
  <link rel="stylesheet" type="text/css" href="css/upanel.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="row">
    <div class="col-sm-7"style="margin:50px;">
      <h2>Important Information related to Addmission</h2>
<p>In this section you will get every information related to addmission in BCA 2020-2023 in T.N.B College .</p>
<button class="accordion"><i class='fas fa-info-circle' style='font-size:24px'></i>&nbsp;Instruction </button>
<div class="panel">
 <p><span style="font-weight: bold;">Step-1:</span>Register on online portal by clicking the link online addmission for BCA 2020-23.</p>
 <p><span style="font-weight: bold;">Step-2:</span>Login to complete your form along with your application no and dob.</p>
 <p><span style="font-weight: bold;">Step-3:</span>Make payment throung any payment method such as debit card ,netbanking and upi wallet like phone pe ,paytm wallet,google-tej etc.Any kind of payment mode are acceptable by us.</p>
 <p><span style="font-weight: bold;">Step-4:</span>After successful payment you can download your application slip with your application no and password that will be provided by us after successful payment.</p>
</div>

<button class="accordion"><i class='far fa-copy' style='font-size:24px'></i>&nbsp;Important Documents</button>
<div class="panel">
  <p>1.Passport size photograph</p>
  <p>2.Signature</p>
  <p>3.12th Admit Card</p>
  <p>4.12th Marksheet </p>
  <p>5.Aadhar No</p>
  <p>6.Email Id</p>
  <p>7.Mobile No</p>
</div>

<button class="accordion"><i class='fas fa-search' style='font-size:24px'></i>&nbsp;Check Application Status</button>
<div class="panel">
  <p><div class="form-row mb-4">
        <div class="col">
            <!-- Application No -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Enter Application No">
        </div>
        <div class="col">
            <!-- Password -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Enter Password">
        </div>
        <div class="col">
        <button class="form-control btn-info">Login</button>
    </div>
    </div></p>
</div>
<button class="accordion">&nbsp;<i class='fas fa-lock-open' style='font-size:24px'></i>Login To apply</button>
<div class="panel">
  <p><a href="login.php">Click Here to login</a></p>
</div>
<button class="accordion"><i class='fas fa-print' style='font-size:24px'></i>&nbsp;Print Application Slip</button>
<div class="panel">
  <p><div class="form-row mb-4">
        <div class="col">
            <!-- Application No -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Enter Application No">
        </div>
        <div class="col">
            <!-- DOB -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Enter DOB">
        </div>
        <div class="col">
        <button class="form-control btn-info">Print</button>
    </div>
    </div></p>
</div>
<button class="accordion"><i class='fas fa-dollar-sign' style='font-size:24px'></i>&nbsp;Make Payment</button>
<div class="panel">
 <p><a href="paylogin.php">Make Payment</a></p>
</div>

      
    </div>
    <div class="col-sm-4"style="padding:20px;">
     <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h5 mb-4">Login To Complete your form</p>

    <div class="form-row mb-4">
        <div class="col-sm-12">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Registration No.">
        </div>
    </div>
    <div class="form-row mb-4">
          <div class="col-sm-12">
            <!-- First name -->
            <input type="date" id="defaultRegisterFormFirstName" class="form-control" placeholder="Enter Date of Birth">
        </div>
    
    </div>
    <div class="form-row mb-4">
         <div class="col-sm-12">
        <a href="">forget registration no?</a>
    </div>
    </div>

  
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Login</button>
</form>
<!-- Default form register -->
    </div>
  
  </div>
  <?php 
  include 'footer.php';
  ?>
</body>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>