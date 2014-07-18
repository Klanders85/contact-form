<?php

//creds for db
$user = 'root';
$pass = 'root';

//input values store in variables
$f_name = $_POST['f_Name'];
$l_name = $_POST['l_Name'];
$email = $_POST['email'];

//db connection
$db_connect = new PDO('mysql:host=localhost;dbname=test_db', $user, $pass);

//prepare query statement
$query = $db_connect->prepare("INSERT INTO subscribers(first_name,last_name,email) VALUES('$f_name','$l_name','$email')");

//execute query statement
$query -> execute();

//validate email

//placeholder to prevent sql injection

?>