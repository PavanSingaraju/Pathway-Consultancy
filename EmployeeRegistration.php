<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
//$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
