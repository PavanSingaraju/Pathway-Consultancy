<?php
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
$EmployeeId = $_POST['EmployeeId'];

mysqli_query($db,"DELETE FROM Employee WHERE EmployeeID = '$EmployeeId'");
