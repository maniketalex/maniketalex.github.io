<?php 
session_start();
include('header.php');
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript"src="js/js.js"></script>
</head>
<body>
	<!--Section: Contact v.2-->
<section class="mb-2">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-2">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our college staff will come back to you within
        a matter of hours to help you.</p>

    <div class="row"style="margin:20px;">

        <!--Grid column-->
        <div class="col-md-6 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Lower nathnagar tnbcollege Bhagalpur</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 9905978755</p>
                    <p>+91 9430428348</p>
                    <p>+91 9534411274</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>bcatnb2003@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</body>
</html>
