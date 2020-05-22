<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
//$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
// REGISTER USER
if (isset($_POST['reg_employee'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $class = mysqli_real_escape_string($db, $_POST['work_type']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);

    