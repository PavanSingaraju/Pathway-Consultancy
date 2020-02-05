<?php
session_start();

$username = $_SESSION['username'];

$id = $_POST['id'];

$host ="localhost";
$uname = "root";
$pwd = '';
$db_name ="pathwayconsultancy";

$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
$shortlist_query = mysqli_query($result,"insert into shortlisteduni (studentName,UNiversityID) values ('$username','$id')");
header("location:javascript://history.go(-1)");



