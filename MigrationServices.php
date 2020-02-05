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

    <title>Migration Services</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">

</head>
<style>
    body p{
        padding-top: 5px;
        text-align: left;
        font-size: large;
    }

</style>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;height:80px; font-size: 15px">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" <?php
        if (isset($_SESSION['username'])){ echo "href='index.php'";}else echo "href='index.html#page-top'";?> style="color:#ff4500!important;font-size:20px">Pathway</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#services" id="drop">services</a>
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

                    echo "<li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"shortlisted.php\">Shortlisted</a>
                    </li>";
                    echo "<li class=\"nav-item\">
                        <p style=\"color: ghostwhite; margin-top: 6%; font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';text-transform: none\">Logged In As : <a href=\"logout.php\">$username</a></p>
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
<header class="masthead" style="background-image:url('http://localhost/pathway/img/Migration_banner.jpg'); background-position: top;float: top; height: 70vh">
    <div class="container">
        <div class="intro-text">

            <br>
            <br>
        </div>
    </div>
</header>
<section class="page-section" id="services">

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center" style="text-align: left">
            <h2 class="section-heading text-uppercase" style="float: left!important; margin-top: 80px">Immigration</h2>
            <p style="margin-top: 150px">Australia or Canada can be an ideal destination for you and your family! Find yourself amid fabulous employment opportunities and excellent standard of living. This is what makes these countries  hugely popular destinations among the migrants planning to start a new life.</p>

            <p style="float: left">Surrounded by the Indian and Pacific oceans, Australia is one of the most urbanized populations in the world. Sydney and Melbourne are the most urbane, modern and technologically advanced cities in Australia. Along with being rich in natural resources and immense of fertile lands, more than one-third of Australia is a desert.Australia has demand for skilled, semi-skilled workers from a different range of fields such as Engineers, IT, Education, Human Resource, Accounting, Sales & Marketing, Hospitality, Maritime & much more. Australia is one of the world’s most ethnically diverse nations.</p>
            <p style="float: left">With a nice climate, excellent public services, and beautiful scenery to accompany your run, many newcomers report that they find themselves more likely to stay fit in Canada than they did at home.</p>

            <p style="float: left">We can help you to migrate to your chosen country as efficiently as possible.</p>

            <p style="float: left"><strong>How does it work?</strong></p>

            <p style="float: left">Migrating to a different country to work, settle or study is an expensive & time-consuming process. Sometimes, even after a lot of time, money & effort have been spent; the migration attempt can be unsuccessful.</p>

            <p style="float: left">Immigration to Australia is the process by which people migrate to Australia to reside. Australia is ranked as the second best country in the world for quality of life through a UN report, which assessed the economic, education and life expectancy data. Money, while it cannot buy happiness, is a valuable means of accomplishing higher standard of living. Immigrants in Australia are from different parts of the world. The majority of these individuals become Australian citizens.</p>

            <p style="float: left"> We understand you and your needs & offer a helping hand for your immigration requirements. Here’s some information about how immigration process to Australia works:</p>

            <p style="float: left">Both the countries offer various options for those who want to settle as permanent residents. Before you apply, you need to be sure that you actually qualify as per the current rules.</p>
            <p style="float: left">We offer a technical evaluation for those looking to settle in Australia. This is a mandatory requirement as it allows us to be sure with your eligibility.</p>
            <p style="float: left">If your evaluation is positive, we will accept your case for processing. In case your evaluation report is negative, we will give you a complimentary report for any other option might be available to you.</p>
            <p style="float: left">Most immigration programs are point based and the Eligibility Report is an elaborate document that contains your Score Card.</p>
            <p style="float: left">How our Immigration Consultant Services can help?</p>

            <p style="float: left">Our Services houses a team of professional consultants that ensure the timely processing of all tourist and business applications by coordinating with the relevant authorities.</p>

            <p style="float: left">This enables you to travel easily and have a hassle free trip or immigration to Australia. Our services include handling all documentations or online applications for all travel and immigration applications. The services provided by our professional consultants can help ensure an easy application process for you, significantly reducing any risk of application rejection.</p>
        </div>
    </div>
    <div class="row text-center" style="margin-top: 80px">
        <div class="col-md-4">
          <span class="fa-stack fa-4x" >
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-phone fa-stack-1x fa-inverse" ></i>
          </span>
            <h4 class="service-heading"><a style="color:#ff4500 ">Step 1</a></h4>
            <h4 class="service-heading"><a>Get in touch</a></h4>
            <p class="text-muted">First, we'll meet you and understand what your concerns are and go over the process of applying for the visa you are most suited for.</p>
        </div>

        <div class="col-md-4">
          <span class="fa-stack fa-4x" >
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-id-card fa-stack-1x fa-inverse" ></i>
          </span>
            <h4 class="service-heading"><a style="color:#ff4500 ">Step 2</a></h4>
            <h4 class="service-heading"><a>prepare your application</a></h4>
            <p class="text-muted">Then, we'll help you put together your application correctly and ensure that it's submitted with all of the appropriate supporting documents.</p>
        </div>

        <div class="col-md-4">
          <span class="fa-stack fa-4x" >
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-plane-departure fa-stack-1x fa-inverse" ></i>
          </span>
            <h4 class="service-heading"><a style="color:#ff4500 ">Step 3</a></h4>
            <h4 class="service-heading"><a >start your new life</a></h4>
            <p class="text-muted">As soon as your application is approved, we'll let you know what comes next so you can get on with planning your time in your new place.</p>
        </div>

    </div>
</div>
</section>

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

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/agency.min.js"></script>
</body>

</html>

