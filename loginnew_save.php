<?php
        session_start();
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="corephp";

        $conn = new mysqli( $servername,$username,$password,$dbname);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from sign_up where email = '".$username."' and password = '".$password."' ";
        $res = $conn ->query($sql);
        if ($res->num_rows > 0 ){
            $_SESSION['useremail'] = $username;
          header("Location:profile.php");           

        }
        else {
            header("Location:loginnew.php");
        }


?>