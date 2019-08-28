<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['btnSubmit'])){
      $fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $jobTitle = $_POST['jobTitle'];
      $company = $_POST['company'];
      $msg = $_POST['msg'];

      // echo $fullName.$email.$phone.$city.$country.$jobTitle.$company.$msg;
      
      $to = "ritcheydevs@gmail.com";
      $subject = "Notification - Contact Us Form";

      $message = "
      <html>
      <head>
      <title>". $subject ."</title>
      </head>
      <body>
      <p>".$fullName." just filled the contact us form...</p>
      
      <br/><br/>
      <h5>Fullname: <b>".$fullName."</b></h5><br/>
      <h5>Email: <b>".$email."</b></h5><br/>
      <h5>Phone Number: <b>".$phone."</b></h5><br/>
      <h5>City: <b>".$City."</b></h5><br/>
      <h5>Country: <b>".$country."</b></h5><br/>
      <h5>Job Title: <b>".$jobTitle."</b></h5><br/>
      <h5>Company: <b>".$company."</b></h5><br/>
      <h5>How can we help you: <b>".$msg."</b></h5><br/>

      <br/>
      </body>
      </html>
      ";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8 \r\n";
      $headers .= "From: $email \r\n";
      // $headers .= 'Cc: myboss@example.com' . "\r\n";

      $response = mail($to, $subject, $message,$header);

      if (!$response){
          echo "<script>alert(".error_get_last()['message']."</script>";
      }else{
          echo "<script>alert('Thanks for reaching us, We will get back to you!')</script>";
      }
    }
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131664412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131664412-1');
</script>

	<meta charset="UTF-8">

	<title>Let's talk | Neptunn</title>

	<!--Import Google Icon Font-->

	<link rel="icon" href="Images/web-favicon.png">

	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <!--Import materialize.css-->

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	 <link type="text/css" rel="stylesheet" href="assets/css/materialize/css/materialize.min.css"  media="screen,projection"/> 

	 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> 

	 <script src="javascript/jquery-2.2.4.min.js"></script>

	 <script type="text/javascript" src="script.js"></script>

	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style3.css">

	<link rel="stylesheet" href="style2.css">

	  <!--Let browser know website is optimized for mobile-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.71.184.6:8080/www/default/base.js'></script>

<body>

	<div class="modal_content">

		<i class="fa fa-close"></i>

		<ul>

			<a href="index.html"><li>Home</li></a>

			<a href="service.html"><li>Services</li></a>

			<a href="work.html"><li>Work</li></a>

			<a href="about.html"><li>About</li></a>

			<a href="contact.html"><li>Contact</li></a>

			<a href="journal.html"><li>Journal</li></a>

		</ul>

       </div> 

	<div class="header-wrap">

		<header class="nav-wrapper">

		  <a href="index.html" class="logo"><img src="Images/Neptunn's%20Logo%20_%20Black.png" alt=""></a>

		  <ul id="nav-mobile" class="right">

			<li><a href="contact.html">Contact</a></li>

			<li>

				<div class="navbar_contain">

					<div class="navbar_1"></div>

					<div class="navbar_2"></div>

					<div class="navbar_2"></div>

				</div>

			</li>

		  </ul>

		</header>

	</div>

	

	  <div class="service-header1">

        <div class="row">

            <div class="head col s12 m12 l6">

                <h1>Let's talk!</h1>

            </div>

        </div>

    </div>

    

    

     <div class="formed row">

    <form class="col s12 m12 l12" method="post">

      <div class="row">

        <div class="input-field col s12 m12 l12">

          <input id="full_name" name="fullName" type="text" class="validate" required>

          <label for="full_name">Full Name*</label>

        </div>

		</div>

        

      <div class="row">

        <div class="input-field col s12  m12 l12">

          <input id="email" name="email" type="email" class="validate" required>

          <label for="email">Email*</label>

        </div>

      </div>

      <div class="row">

        <div class="input-field col s12  m12 l12">

          <input id="phone" name="phone" type="number" class="validate" required>

          <label for="phone">Phone*</label>

        </div>

      </div>

      <div class="row">

          <div class="input-field col s12 m12 l12">

            <input id="city" name="city" type="text" class="validate" required>

            <label for="city">City*</label>

        </div>

      </div>

      <div class="row">

          <div class="input-field col s12 m12 l12">

            <input id="country" name="country" type="text" class="validate" required>

            <label for="country">Country*</label>

        </div>

      </div>

      

       <div class="row">

          <div class="input-field col s12 m12 l12">

            <input id="job_title" name="jobTitle" type="text" class="validate" required>

            <label for="job_title">Job title*</label>

        </div>

      </div>

      

       <div class="row">

          <div class="input-field col s12 m12 l12">

            <input id="company" name="company" type="text" class="validate" required>

            <label for="company">Company*</label>

        </div>

      </div>

      

       <div class="row">

        <div class="input-field col s12 m12 l12">

          <textarea id="textarea1" name="msg" class="materialize-textarea" required></textarea>

          <label for="textarea1">How can we help you?</label>

        </div>

      </div>

     <a href="contact.html"><button class="submit" name="btnSubmit">Submit</button></a> 

    </form>

  </div>



<br>

    <div class="contact-details">

        <div class="row">

            <div class="texti col s12 m12 l6">

                <h2><strong>You can reach us anytime</strong></h2>

                <h3>Send us a mail<br> <span><a href="mailto:holla@neptunn.com" target="_blank">holla@neptunn.com</a></span><br>

                <br>

                or you can call us <br> +2348180992590, +2347085459071</h3>

                

                <h3 class='ad2'>9, Ribadu Road, Off Awolowo Road, Ikoyi,<br> <span class='ad'>Lagos State, Nigeria</span></h3>

                

                <h3 class='ad2'>11, Fola Amure St, Okuta Elerinla Estate, Akure,<br><span class='ad'>Ondo State, Nigeria</span></h3>

            </div>

        </div>

    </div>

	

	<footer class="page-footer">

        <div class=" row container">

        	<div class="subscribe col l7 s12">

         	<h2>Stay in touch</h2>

         	<input type="text" placeholder="Enter email for our newsletter">

			<a href="#"><button>SUBSCRIBE</button></a>

         </div>

        </div>

            

             <div class="foot row">

              <div class="email col l3 s5">

                <h5>Send us a mail</h5>

                <p class="grey-text text-lighten-4">

				<a href="mailto:holla@neptunn.com" target="_blank">holla@neptunn.com</a></p>

              </div>

              <div class="links col l3 offset-l2 s5">

                <ul>

                  <a href="service.html"><li>Services</li></a>

					<a href="work.html"><li>Work</li></a>

					<a href="about.html"><li>About</li></a>

					<a href="contact.html"><li>Contact</li></a>

					<a href="journal.html"><li>Journal</li></a>

                </ul>

              </div>

			  <div class="icon col l4  m12 s12">

			  	<a href="http://www.twitter.com/@StudioNeptunn"><i class="fa fa-twitter"></i></a>

			  <a href="http://www.fb.me/StudioNeptunn"><i class="fa fa-facebook"></i></a>

			  	<a href="http://www.linkedin.com/company/studioneptunn"><i class="fa fa-linkedin"></i></a>

			  	<a href="http://www.instagram.com/StudioNeptunn"><i class="fa fa-instagram"></i></a>

			  	<p>©2019 Neptunn. All rights reserved.<br>

				Terms and conditions | Privacy Policy</p>

			  	

			  </div>

			 </div>

        </footer>

	<!--Import jQuery before materialize.js-->

	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	 <script type="text/javascript" src="assets/css/materialize/js/materialize.min.js"></script>

	 <script></script>

</body>

</html>