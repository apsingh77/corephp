<?php
    session_start();
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname ="corephp";

    $conn = new mysqli( $servername,$username,$password,$dbname );

    $username = $_POST['u_name'];
    $password = $_POST['password'];
    $sql = "select * from sign_up where email = '".$username."' and password = '".$password."' ";
    $res = $conn->query($sql);
    // die(print_R($res));
    if($res->num_rows > 0){
        $_SESSION['user_email'] = $username;
        header("Location:profile.php");
    }else{
        header("Location:login.php");
    }


?>