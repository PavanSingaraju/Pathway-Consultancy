<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Trending Courses Canada</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <style>
        body{overflow-x: hidden;
            font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }
        .main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
        h3{background-color: #ff4500; color: #f7f7f7; padding:15px; border-radius:6px; box-shadow: 0 100px 600px rgba(57,73,76,0.35);margin-top:80px;}
        .img-box{margin-top:20px;}.p{margin-top:20px;margin-left:200px;}
        .img-block{float: left; margin-right: 5px; text-align: center;}
        p{margin-top: 0;font-size: medium;}
        a{color: #ff4500;}
        .img-block img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
    </style>
</head>
<body id="page-top">
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

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=install_email
     page_id="110171100657895"
     theme_color="#ff4500">
</div>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"style="background-color: #212529; height:80px; font-size: 15px">
    <div class="container">
        <img src="img/logo.png" style="width: 80px; height:70px">
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
                    <a class="nav-link js-scroll-trigger"  href="index.php#portfolio">Explore Country</a>
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


<!-------------------Main Content------------------------------>

<h3>Top 5 Trending Courses in Australia 2020</h3>

<?php
/*$host ="localhost";
$uname = "ictatjcu_cons1";
$pwd = '123zxc';
$db_name ="ictatjcu_cons1";*/
$host ="localhost";
$uname = "root";
$pwd = '';
$db_name ="pathwayconsultancy";

$file_path = 'photo/';
$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
$image_query = mysqli_query($result,"select CourseName,img,description,Universities from TrendingCoursesCanada ");
while($rows = mysqli_fetch_array($image_query))

{

    $course_name = $rows['CourseName'];
    $img_src = $rows['img'];
    $desc = $rows['description'];
    $universitiesAvailable = $rows['Universities'];



    ?>
    <div class="container main">
        <div class="img-box">


            <div class="img-block">
                <form action="updateShortlist.php" method="post" id="form1">
                    <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $course_name; ?>" width="300" height="200" class="img-responsive" /><p><strong><a><?php echo $course_name; ?></strong></a></p><p><strong>Available Universities :</strong></p></div>
            <br>
            <p style="margin-left:390px; align-content: center"><?php echo $desc; ?></p>
            <br>
            <br>
            <p style="margin-left:390px;padding-top: 16%; align-content: center"><strong><?php echo $universitiesAvailable; ?></strong></p>

            </form>
        </div>
    </div>



    <?php

}
?>
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
<script>


</script>


</body>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/agency.min.js"></script>




</html>