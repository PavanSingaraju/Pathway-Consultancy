<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
//$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
// REGISTER USER
if (isset($_POST['reg_employee'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $class = mysqli_real_escape_string($db, $_POST['work_type']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $tempPasswrd = mysqli_real_escape_string($db, $_POST['password']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($role)) { array_push($errors, "Work Role is required"); }
    if (empty($class)) { array_push($errors, "Work type is required");}
    if (empty($mobile)) { array_push($errors, "Contact No. is required");}
    if (empty($tempPasswrd)) { array_push($errors, "Temporary Password is required");}

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM Employee WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $tempPasswrd = md5($tempPasswrd);



        $query = "INSERT INTO Employee (username, email, role, workType, mobileNumber, TempPassword) 
  			  VALUES('$username', '$email', '$role','$class','$mobile','$tempPasswrd' )";
        mysqli_query($db, $query);
        header('location: ../Admin/index.php');
    }
}