<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Employee Dashboard</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="../css/agency.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../adminStyle">
    <style>
body{overflow-x: hidden;
            font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }
        .main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
        h3{background-color: #ff4500; color: #f7f7f7; padding:15px; border-radius:6px; box-shadow: 0 100px 600px rgba(57,73,76,0.35);margin-top:10px;margin-bottom: 10px}
        .img-box{margin-top:20px;}.p{margin-top:20px;margin-left:200px;}
        .img-block{float: left; margin-right: 5px; text-align: center;}
        p{margin-top: 0;font-size: medium;}
        a{color: #ff4500;}
        .img-block img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}


        .green-border-focus .form-control:focus {
            border: 1px solid #8bc34a;
            box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, .25);
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Assigned Students DashBoard</h3>


    <?php

    $host ="localhost";
    $uname = "root";
    $pwd = '';
    $db_name ="pathwayconsultancy";

    $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
    $empName = $_SESSION['username'];


    $students =  "SELECT DISTINCT StudentID,studentEmail,StudentUnis,studentName FROM AssignedStudents where EmployeeName = '$empName'";
    $user_query = mysqli_query($result,$students);


    //$Emp_query = "SELECT username,EmployeeID FROM Employee where EmployeeID!=0";
    //$Emp_query = mysqli_query($db,$Emp_query);

    echo "<table class=\"table table-hover table-dark\">
<thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Student ID</th>
      <th scope=\"col\">Student Name</th>
      <th scope=\"col\">Student Email</th>
      <th scope=\"col\">Shortlisted_Uni_Ids</th>
      <th scope=\"col\">Mark Status</th>
      <th scope=\"col\">Save</th>
      
      
      
      
    </tr>
  </thead>
  <tbody>";
    $i = 1;
    while($rows = mysqli_fetch_array($user_query)){
        $student_name = $rows['studentName'];
        $student_id = $rows['StudentID'];
        $student_email = $rows['studentEmail'];
        $student_Unis = $rows['StudentUnis'];



        //$y = mysqli_query($db,"INSERT INTO test (name,id,shortlisted,email) values (1,1,1,1)");

        echo "
    <tr id = \"line\">
      <th scope=\"row\">$i</th><td>".$student_id."</td><td>".$student_name."</td><td>".$student_email."</td><td>".$student_Unis."</td><td><select class=\"form-control\"  id=\"diff$i\" name=\"diff\" >
                    <option value=\"0\">Select a Status</option><option value=\"1\">Contacted</option><option value=\"2\">Awaiting reply</option><option value=\"3\">Application Processing</option><option value=\"4\">Application Finished</option>";

        echo "</select></td><td><button id=\"set\" style=\"background-color: green;padding: 5px 5px 5px 5px\" onclick=\"MarkStatus('$student_id','$i')\">Save</button></td>></tr>";

        //$row['index'] the index here is a field name
        $i=$i+1;
    }
    echo "</tbody></table>";
    echo "<div class=\"input-group\">
        <button type=\"submit\" class=\"btn\" name=\"logout\" onclick=\" endsession()\">Log Out</button>
    </div>";
    session_write_close();

    //$insert = mysqli_query($result,"INSERT INTO test (name,id,shortlisted,email) values ('".$user_name."','".$user_id."','".$x."','".$user_email."')");



    ?>
    <script type="text/javascript">

        function MarkStatus(p,q) {
            var status = $('#diff'+q).find(':selected').html();
            var studentId = p;
            console.log(status);
            console.log(studentId);

            //var EmpID = $('#diff'+p).find(':selected').val();

            $.ajax({
                    type: "POST",
                    url: "MarkStatus.php",
                    data: {
                        status:status,
                        StudentId:studentId


                    }
                }
            );





        }

        function endsession() {
            window.location.href = '../logout.php';

        }

        </script>
