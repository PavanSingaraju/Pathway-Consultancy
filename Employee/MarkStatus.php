<?php
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');

//$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
$studentId = $_POST['StudentId'];
$status = $_POST['status'];

mysqli_query($db,"UPDATE users SET studentStatus = '$status' WHERE id = '$studentId'");
