<?php
session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Student Services</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v6.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="110171100657895"
     theme_color="#ff4500"
     logged_in_greeting="G'day! how can we assist you in your journey?"
     logged_out_greeting="G'day! how can we assist you in your journey?">
</div>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;height:80px; font-size: 15px">
    <div class="container">
        <img src="img/logo.png" style="width: 80px"; height="auto">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top" style="color:#ff4500!important;font-size:20px">Pathway</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" style="color: #ff4500" href="index.php#services" id="drop">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Explore Country</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
                </li>
                <?php
                if (isset($_SESSION['username'])){
                    echo"<li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"dashboard.php\">My Dashboard</a>
                </li>";
                    echo "<li class=\"nav-item\">
                        <p style=\"color: ghostwhite; margin-top: 6%; font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';text-transform: none\">Logged In As : <a href=\"logout.php\"> $username</a></p>
                    </li>";
                }else{
                    echo "<li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"login.php\">Login</a>
          </li>";
                }
                ?>

            </ul>
        </div>
    </div>
</nav>

<header class="masthead" style="background-image:url('img/student_banner.jpg'); backdrop-filter: grayscale(1)!important; height: 50vh; padding-top: -200px!important;margin-top: 80px!important;">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text" style="position: center!important; margin-top: -180px; color: white; ">Where do you want your studies to take you?</div>
            <div class="intro-lead-in" style="color:white; font-size: x-large; margin-top: -20px">Our Education Counsellors can get you on the right track towards an amazing career</div>

            <br>
            <br>
        </div>
    </div>
</header>

    <div class="row col-xl-12">
        <div class="col-6">
            <img src="img/studentservices.jpg" style="padding-top: 40px; padding-left: 20px; ">
        </div>

        <div class="col-6" style="padding-top: 40px; ">
            <p>Choosing a course of study in Australia can be daunting, with so many quality options available and numerous wonderful locations to live in while you do it.</p>

            <p>If you’re not sure where to start, or if you think you know where you’re going but want expert advice first, then speak with us before you apply.</p>
            <p>Our qualified and experienced education counsellors would love to hear your story and help you develop a comprehensive learning plan to get you where you want to go. And with our extensive institutional relationships, we can help you confirm if you’re looking at the right courses (or suggest alternatives if we know there’s something better).</p>
            <p>Speak one-on-one with an education counsellor</p>
            <p>Almost all our counsellors have been an international student at some point of time, so we’ve got real empathy and first-hand experience to share with you</p>
            <p>We speak 21 languages within the company, so someone on our team will be able to help you in a language that you are most comfortable talking in</p>
            <p>Our in-house team of registered migration agents can organise everything from study visas to residency visas for you.</p>
            <p>Our certified educational counsellors will take the time to learn about your career aspirations and
                lifestyle goals so we can offer tailored, personal advice. And because we’re completely independent,
                you can relax knowing we’ll only suggest the best course options for you.</p>

        </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="index.php#contact" style="margin-left: 40%!important;">Get in Touch</a>
    </div>

<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Pathway Consultancy 2020</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



