<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "corephp";

    //connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //check conn
    if ($conn-> connect_error){
        die("connection failed:" . $conn->connection_error);
    }
    // print_r()
    // $fname=$_POST['']
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $messge = $_POST['message'];



    $sql= "Insert into contact_us(first_name, last_name, contact_number, email, message) values ('$firstName', '$lastname', '$contact', '$email','$message')";

// echo $sql;
//     die;
    if($conn->query($sql)=== true){
        echo "new record saved successfully";
    }
    else{
        echo "Error:" . $sql ."<br>". $conn->error;
    }
    $conn->close();
    header('Location:contact_us.php')
?>
