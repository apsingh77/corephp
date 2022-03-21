<?php
session_start();
$servername= "localhost";
$username= "root";
$password= "";
$dbname ="corephp";

$conn = new mysqli( $servername,$username,$password,$dbname );

?>