<?php
session_start();
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Pathway Consultancy</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html#page-top">Pathway</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services" id="drop">services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Explore Country</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="shortlisted.php">Shortlisted</a>
            </li>
          <li class="nav-item">
              <p style="color: ghostwhite; margin-top: 6%; font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';text-transform: none">Logged In As : <a href="ExploreAustralia.php"><?php echo $username?></a></p>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="color:#ff4500 ">Welcome To Pathway!</div>
        <div class="intro-heading text">Work With a Consultancy That Gets It.</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        <br>
        <br>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Your dedicated Pathway counsellor will work with you closely to prepare you for your study abroad journey and help you every step of the way.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <span class="fa-stack fa-4x" >
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-book fa-stack-1x fa-inverse" ></i>
          </span>
          <h4 class="service-heading"><a href="#studentServices.html">Student Services</a></h4>
          <p class="text-muted">Talking with an Education Counsellor from Pathway Consultancy can help. You can tell us your career goals and we’ll provide you with expert guidance on the study choices that will get you there.</p>
        </div>

        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-plane-arrival fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"><a href="#migrationServices.html"> Migration Services</a></h4>
          <p class="text-muted">Applying for a visa to study or live anywhere can be a confusing and complicated process with the ever-changing rules and documentation requirements. Our team of registered and experienced migration agents can offer comprehensive guidance and end to end management of your visa application for you.</p>
        </div>
      </div>
    </div>
  </section>
