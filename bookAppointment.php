<?php
session_start();
$username = $_SESSION['username'];

$id = $_POST['id'];
/*
$host ="localhost";
$uname = "ictatjcu_cons1";
$pwd = '123zxc';
$db_name ="ictatjcu_cons1";*/

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$host ="localhost";
$uname = "root";
$pwd = '';
$db_name ="pathwayconsultancy";

$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
$shortlist_query = mysqli_query($result,"insert into Appointment (name,email,phone,message) values ('$name','$email','$phone','$message')");
header("location:javascript://history.go(-1)");
session_write_close();