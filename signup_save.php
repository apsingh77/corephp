<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="corephp";

    $conn= new mysqli ($servername,$username,$password,$dbname);
    if ($conn-> connect_error){
        die ("connection failed:". $conn ->connection_error);
        
    }

    //$email = $_POST['email'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    //$password = $_POST['pwd'];
    $dob = $_POST ['dob'];
    $gender = $_POST ['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into sign_up(first_name, last_name, dob, gender, email, password) values ('$firstname', '$lastname','$dob', '$gender','$email','$password')";

    if ($conn->query($sql)===true){

    }
    else{
        echo "Error:".$sql.$conn->error;
    }

    $conn->close();
    header('location:register_list.php') 

?>
?>