<?php
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
$EmployeeName = $_POST['EmployeeName'];
$studentId = $_POST['StudentId'];
$studentEmail = $_POST['studentEmail'];
$studentUnis = $_POST['unis'];
$studentName = $_POST['studentName'];
mysqli_query($db,"UPDATE users SET Assigned_Employee = '$EmployeeName' WHERE id = '$studentId'");
mysqli_query($db,"INSERT INTO AssignedStudents(EmployeeName,StudentID,studentEmail,StudentUnis,studentName) values ('$EmployeeName','$studentId','$studentEmail','$studentUnis','$studentName')");

