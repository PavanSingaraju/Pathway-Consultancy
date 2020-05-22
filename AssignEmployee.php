<?php
$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
$EmployeeName = $_POST['EmployeeName'];
$studentId = $_POST['StudentId'];
mysqli_query($db,"UPDATE users SET Assigned_Employee = '$EmployeeName' WHERE id = '$studentId'");


/*$sql = "INSERT INTO instance (instanceID, instanceJSON) VALUES ('".$instanceID."','".$volumeCap."')";
$result = mysqli_query($db,$sql);*/
