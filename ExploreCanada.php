<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Canada</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">
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
        img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
    </style>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html#page-top" style="color:#ff4500!important;font-size:20px">Pathway</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.html#services" style="color:#ff4500!important;font-size: 14px" >services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.html#portfolio" style="color:#ff4500!important;font-size: 14px">Explore Country</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.html#about" style="color:#ff4500!important;font-size: 14px">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.html#team" style="color:#ff4500!important;font-size: 14px">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.html#contact" style="color:#ff4500!important;font-size: 14px">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login.php" style="color:#ff4500!important;font-size: 14px">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>2
<!-------------------Main Content------------------------------>

<h3>Top Universities in Canada 2020</h3>

<?php
$host ="localhost";
$uname = "root";
$pwd = '';
$db_name ="pathwayconsultancy";

$file_path = 'photo/';
$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
$image_query = mysqli_query($result,"select name,img,url,world_ranking,description from universities where country = 'Canada'");
while($rows = mysqli_fetch_array($image_query))
{

    $img_name = $rows['name'];
    $img_src = $rows['img'];
    $siteUrl = $rows['url'];
    $ranking = $rows['world_ranking'];
    $desc = $rows['description'];

    ?>
    <div class="container main">
        <div class="img-box">


            <div class="img-block">
                <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" width="300" height="200" class="img-responsive" /><p><strong><a href="<?php echo $siteUrl;?>"><?php echo $img_name; ?></strong></a></p><p><strong>World Ranking : <?php echo $ranking;?></strong></p></div>
            <br>
            <p style="margin-left:390px"><?php echo $desc; ?></p>
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


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/agency.min.js"></script>
</body>
</html>
