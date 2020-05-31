<?php

/*$host ="localhost";
$uname = "root";
$pwd = '';
$db_name ="pathwayconsultancy";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
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
    <h3>Registered Students DashBoard</h3>


    <?php
    $host ="localhost";
    $uname = "ictatjcu_cons1";
    $pwd = '123zxc';
    $db_name ="ictatjcu_cons1";
    $file_path = 'photo/';
    $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());

    $students =  "SELECT id,username,email,Assigned_Employee FROM users where Admin = 'No'";
    $user_query = mysqli_query($result,$students);
    $Emp_query = "SELECT * FROM Employee where EmployeeID!=0";
    $Emp_query = mysqli_query($result,$Emp_query);

    //$Emp_query = "SELECT username,EmployeeID FROM Employee where EmployeeID!=0";
    //$Emp_query = mysqli_query($db,$Emp_query);

    echo "<table class=\"table table-hover table-dark\">
<thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Student ID</th>
      <th scope=\"col\">Student Name</th>
      <th scope=\"col\">Student_Email</th>
      <th scope=\"col\">Shortlisted_Uni_Ids</th>
      <th scope=\"col\">Assign_Employee</th>
      <th scope=\"col\">Employee_Name</th>
      <th scope=\"col\">Save</th>
      <th scope=\"col\">Send_Email_to_Employee</th>
      
    </tr>
  </thead>
  <tbody>";
    $i = 1;
    while($rows = mysqli_fetch_array($user_query)){
        $user_name = $rows['username'];
        $user_id = $rows['id'];
        $user_email = $rows['email'];
        $employeeName = $rows['Assigned_Employee'];
        $uni = "SELECT GROUP_CONCAT(UNiversityID) FROM shortlisteduni where StudentName = '".$user_name."'";
        $uni_query = mysqli_query($result,$uni);
        $x = mysqli_fetch_assoc($uni_query);
        $x = $x['GROUP_CONCAT(UNiversityID)'];
        $x = preg_replace("/,/","-",$x);
        $Emp_query1 = "SELECT username,EmployeeID FROM Employee where EmployeeID!=0";
        $Emp_query1 = mysqli_query($result,$Emp_query1);
        $Emp_query2 = "SELECT email FROM Employee where username = '".$employeeName."'";
        $Emp_query2 = mysqli_query($result,$Emp_query2);

        $employeeEmail = mysqli_fetch_assoc($Emp_query2);
        $employeeEmail = $employeeEmail['email'];

        //$y = mysqli_query($db,"INSERT INTO test (name,id,shortlisted,email) values (1,1,1,1)");

        echo "
    <tr id = \"line\">
      <th scope=\"row\">$i</th><td>".$user_id."</td><td>".$user_name."</td><td>".$user_email."</td><td>".$x."</td><td><select class=\"form-control\"  id=\"diff$i\" name=\"diff\" >
                    <option value=\"0\">Select a Employee</option>";
        while ($value = $Emp_query1->fetch_assoc()) {
            echo '<option value="'.$value['EmployeeID'].'">'.$value['username'].'</option>';
        };
        echo "</select></td><td><p id = ".$i." style =\"font-size: small\">".$employeeName."</p></td><td><button id=\"set\" style=\"background-color: green;padding: 5px 5px 5px 5px\" onclick=\"AssignEmployee($i, $user_id)\">Save</button></td><td><button onclick=\"SendNotificationEmail('$user_name', '$user_email', '$employeeEmail', '$x')\" style=\"background-color: green; padding: 5px 5px 5px 5px\">Send Mail</button></td></tr>";

        //$row['index'] the index here is a field name
        $i=$i+1;
    }
    echo "</tbody></table>"

    //$insert = mysqli_query($result,"INSERT INTO test (name,id,shortlisted,email) values ('".$user_name."','".$user_id."','".$x."','".$user_email."')");



    ?>
    <h3>Register A New Employee</h3>

    <form method="post" action="EmployeeRegistration.php">
        <?php include('../errors.php'); ?>
        <div class="input-group">
            <label>Employee Name</label>
            <input type="text" name="username" value="">
        </div>
        <div class="input-group">
            <label>Email Address</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label>Employee Role</label>
            <input type="text" name="role" value="">
        </div>
        <div class="input-group">
            <label>Employee Work Class</label>
            <input type="text" name="work_type" value="">
        </div>
        <div class="input-group">
            <label>Contact Number</label>
            <input type="text" name="mobile" value="">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_employee">Register</button>
        </div>

    </form>

    <?php
    echo "<h3>Employee Dashboard</h3>";

    echo "<table class=\"table table-hover\">
        <thead>
        <tr>
            
            <th scope=\"col\">Employee ID</th>
            <th scope=\"col\">Employee Name</th>
            <th scope=\"col\">Employee_Email</th>
            <th scope=\"col\">Employee Role</th>
            <th scope=\"col\">Employee work_type</th>
            <th scope=\"col\">Mobile</th>
            <th scope=\"col\">Remove Employee</th>
        </tr>
        </thead>";

    while($rows1 = mysqli_fetch_array($Emp_query)) {
        $emp_name = $rows1['username'];
        $emp_id = $rows1['EmployeeID'];
        $emp_email = $rows1['email'];
        $emp_role = $rows1['role'];
        $emp_work = $rows1['workType'];
        $emp_mob = $rows1['mobileNumber'];


        echo "<tbody>
        <tr>
            <th scope=\"row\">".$emp_id."</th><td>".$emp_name."</td><td>".$emp_email."</td><td>".$emp_role."</td><td>".$emp_work."</td><td>".$emp_mob."</td><td><button id=\"delete\" style=\"background-color: red;padding: 5px 5px 5px 5px\" onclick=\"DeleteEmployee('$emp_id')\">Delete</button></td></tr>";

    }
    echo "</table>";
    ?>



    <h3>Change Home Page Content</h3>


    <div class="form-group green-border-focus">
        <label for="exampleFormControlTextarea5">Add New Content</label>
        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
    </div>
    <label>Select Appropriate section to update the new content with </label>
    <br>
    <br>
    <tr><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('welcome')">Edit Welcome Para</button></td><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('services')">Edit Services Header</button></td><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('student')">Edit StudentServices Para</button></td><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('migration')">Edit MigrationServices Para</button></td><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('studyAus')">Edit StudyInAus Para</button></td><td><button id ="edit" style="background-color:lightgreen; padding: 5px 5px 5px 5px; margin-left: 10px" onclick="EditHomePage('studyCan')">Edit StudyInCan Para</button></td></tr>
    <br>
    <br><br>
    <br>
    <h3>Add a University For Explore Australia</h3>
    <form action="update_ExploreAus.php" method="post" enctype="multipart/form-data">

        <label for="name">Uni Name:</label>
        <input type="text" name="uniName" id="name">
        <br>
        <br>

        <label for="url">Uni URL:</label>
        <input type="text" name="url" id="url">
        <br>
        <br>
        <label for="city">Uni city:</label>
        <input type="text" name="city" id="city">
        <br>
        <br>
        <label for="worldRanking">Uni Ranking:</label>
        <input type="text" name="worldRanking" id="worldRanking">
        <br>
        <br>
        <label for="description">Uni description:</label>
        <input type="text" name="description" id="description">
        <br>
        <br>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <br>
        <br>
        <input type="submit" name="submit" value="Upload And Submit">
        <br>
        <br>
        <br>
        <br>
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
    <br>
    <br>
    <h3>Add a University For Explore Canada</h3>
    <form action="update_ExploreCan.php" method="post" enctype="multipart/form-data">

        <label for="name">Uni Name:</label>
        <input type="text" name="uniName" id="name">
        <br>
        <br>

        <label for="url">Uni URL:</label>
        <input type="text" name="url" id="url">
        <br>
        <br>
        <label for="city">Uni city:</label>
        <input type="text" name="city" id="city">
        <br>
        <br>
        <label for="worldRanking">Uni Ranking:</label>
        <input type="text" name="worldRanking" id="worldRanking">
        <br>
        <br>
        <label for="description">Uni description:</label>
        <input type="text" name="description" id="description">
        <br>
        <br>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <br>
        <br>
        <input type="submit" name="submit" value="Upload And Submit">
        <br>
        <br>
        <br>
        <br>
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>

    <div class="input-group">
        <button type="submit" class="btn" name="logout" onclick=" endsession()">Log Out</button>
    </div>

</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>


<script type="text/javascript">

    function AssignEmployee(p,q) {
        var EmpName = $('#diff'+p).find(':selected').html();
        var studentId = q;
        //var EmpID = $('#diff'+p).find(':selected').val();
        $('#'+p).empty().append(EmpName);
        $.ajax({
                type: "POST",
                url: "AssignEmployee.php",
                data: {
                    EmployeeName:EmpName,
                    StudentId:studentId
                }
            }
        );

        console.log(EmpName);
        console.log(studentId);



    }
    
    function SendNotificationEmail(StudentName,studentEmail,EmployeeEmail,shortIds) {
        var EmployeeEmail = EmployeeEmail;
        var StudentName = StudentName;
        var studentEmail = studentEmail;
        var shortIds = shortIds;
        console.log(EmployeeEmail);
        console.log(StudentName);
        console.log(studentEmail);
        console.log(shortIds);
        Email.send({
            Host : "smtp-relay.sendinblue.com",
            Port : "587",
            Username : "pathwayconsultancy2020@gmail.com",
            Password : "OvPT6Ak8HC1t7Rcg",
            To : EmployeeEmail,
            From : "pathwayconsultancy2020@gmail.com",
            Subject : "You have been Assigned a New Student!!",
            Body : "Student Name: "+StudentName+", Student Email Address: "+studentEmail+", shortlisted Universities: "+shortIds+". Please use the above given details to contact and pursue our newest student. Good Luck!"
        }).then(
            message => alert("The Email has been Successfully Sent to the Employee!")
        );


    }
    function DeleteEmployee(p) {
        //var EmpName = $('#diff'+p).find(':selected').html();
        var empId = p;
        //var EmpID = $('#diff'+p).find(':selected').val();
        //$('#'+p).empty().append(EmpName);
        $.ajax({
                type: "POST",
                url: "DeleteEmployee.php",
                data: {
                    EmployeeId:empId

                }

            }
        );
        window.location = window.location;


    }
    function EditHomePage(p) {

        var section = p;

        var content = $("#exampleFormControlTextarea5").val();
        $.ajax({
                type: "POST",
                url: "EditHomePage.php",
                data: {
                    Content:content,
                    Section:section
                }
            }
        );
        alert("Home Page Successfully Updated!");
        window.location = window.location;


    }
    function endsession() {
        window.location.href = '../logout.php';

    }



</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>





<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../js/agency.min.js"></script>
