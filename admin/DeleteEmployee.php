<?php
$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
$EmployeeId = $_POST['EmployeeId'];

mysqli_query($db,"DELETE FROM Employee WHERE EmployeeID = '$EmployeeId'");
