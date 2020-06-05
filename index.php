<?php
session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');

//$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
$content =  "SELECT id,welcomeParagraph,ServicesHeader,StudentServicesParagraph,MigrationServicesParagraph,StudyInAustraliaParagraph,StudyInCanadaParagraph FROM HomePageContent where id = 1";
$content_query = mysqli_query($db,$content);
$content_rows = mysqli_fetch_assoc($content_query);
$welcomeParagraph = $content_rows['welcomeParagraph'];
$ServicesHeader = $content_rows['ServicesHeader'];
$StudentServicesParagraph = $content_rows['StudentServicesParagraph'];
$MigrationServicesParagraph = $content_rows['MigrationServicesParagraph'];
$StudyInAustraliaParagraph = $content_rows['StudyInAustraliaParagraph'];
$StudyInCanadaParagraph = $content_rows['StudyInCanadaParagraph'];




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
<!-- Load Facebook SDK for JavaScript -->
<!-- Load Facebook SDK for JavaScript -->
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

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
                  echo"<li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"dashboard.php\">My Dashboard</a>
                </li>";
                  echo "<li class=\"nav-item\">
                        <p style=\"color: ghostwhite; margin-top: 6%; font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';text-transform: none\">Logged In As : <a href=\"logout.php\"> $username</a></p>
                    </li>";
                  echo"<li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"logout.php\">Logout</a>
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
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="color:#ff4500 ">Welcome To Pathway!</div>
        <div class="intro-heading text"><?php echo $welcomeParagraph ?></div>
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
          <h3 class="section-subheading text-muted"><?php echo $ServicesHeader?></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <span class="fa-stack fa-4x" >
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-book fa-stack-1x fa-inverse" ></i>
          </span>
          <h4 class="service-heading"><a href="StudentServices.php">Student Services</a></h4>
          <p class="text-muted"><?php echo $StudentServicesParagraph?></p>
        </div>

        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-plane-arrival fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"><a href="MigrationServices.php"> Migration Services</a></h4>
          <p class="text-muted"><?php echo $MigrationServicesParagraph?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Explore A country Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Explore Your Options </h2>
          <h3 class="section-subheading text-muted">We offer you various choices from Australia And Canada to choose your ideal Course. </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="ExploreAustralia.php">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plane-departure fa-3x" ></i>
              </div>
            </div>
            <img class="img-fluid" src="img/aus.jpg">
          </a>
          <div class="portfolio-caption">
            <h4><a href="ExploreAustralia.php"> Study in Australia</a></h4>
            <p class="text-muted"><?php echo $StudyInAustraliaParagraph?></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="ExploreCanada.php">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plane-departure fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/canada.jpg">
          </a>
          <div class="portfolio-caption">
            <h4><a href="ExploreCanada.php"> Study in Canada</a></h4>
            <p class="text-muted"><?php echo $StudyInCanadaParagraph?></p>
          </div>
        </div>
      </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="TrendingCoursesAus.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-book-open fa-3x" ></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/course_aus.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4><a href="TrendingCoursesAus.php"> Courses in Australia</a></h4>
                    <p class="text-muted">Browse the Top 5 Trending Courses in Australia at the moment.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="TrendingCoursesCan.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-book-open fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/course_can.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4><a href="TrendingCoursesCan.php"> Courses in Canada</a></h4>
                    <p class="text-muted">Browse the Top 5 Trending Courses in Canada at the moment.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About Our Journey</h2>
          <h3 class="section-subheading text-muted">Over the years, our Family has grown from a mere handcount to a team of 80. </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">

            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2016</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">A team of Six graduates decided to try their hand in the Education Sector. </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2017</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">A Humble beginning evolved into a driving force. </p>
                </div>

              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2019</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Very Proud to share the opening of a second Branch!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
<br>Of Our
<br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/member.png" alt="">
            <h4>Arjun Srivasthava</h4>
            <p class="text-muted">Lead of Operations</p>
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
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/member.png" alt="">
            <h4>Chandan Kumar</h4>
            <p class="text-muted">Head of Marketing</p>
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
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/member.png" alt="">
            <h4>Ram Achanta</h4>
            <p class="text-muted">Country Head - Australia</p>
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
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Book An Appointment</h2>
          <h3 class="section-subheading text-muted" style="color:whitesmoke;">Please fill out and submit the below form for enquiries and we promise to be quick to revert.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="bookAppointment.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Additional comments" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" onclick="bookedAppointment()">Book</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
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
<script type="text/javascript">

    function bookedAppointment() {
        var message = "All done with the booking!";
        $('#sendMessageButton').empty().append(message);

    }


</script>

</body>

</html>

