<?php

session_start();

$productimg = 'http://localhost/Lab_Automation/dashboard/Upload/ProductImg/';

$server_Name = 'localhost';
$userName = 'root';
$password = '';
$DB_Name = 'lab';

$conn = mysqli_connect($server_Name,$userName,$password,$DB_Name);

?>