<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
       body {
            background-image: url(11.jpg);
            background-color:#fbfbbe;
            }

            ul li   
                {
                float: left;
                list-style: none;
                margin: 7px;
                }    
            a   
                {
                color: #16dda6;
                text-decoration: none;
                }
            ul 
                {
                    float: right;
                }
            .contact_form{
                margin: 0 auto;
                width: 300px;
            }    
    </style>
</head>
<body>
    
    <div>
    <h1>Contact Us</h1>
        <ul>
            <li> <a href="home.php">Home</a>  </li>
            <li> <a href="contact_us.php">Contact Us</a> </li>

           

        </ul>
    </div>
        <div class="contact_form">
            <form action="contact-save.php" method="post">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="John"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Doe"><br><br>
                <label for="lname">Contact Number</label><br>
                <input type="text" id="cnumber" name="contact" placeholder="10-digits"><br><br>
                <label for="lname">Email:</label><br>
                <input type="text" id="email" name="email" placeholder="@----.com"><br><br>
                <label for="lname">Message</label><br>
                <textarea name="message" style="width:150px; height:150px;"placeholder="message"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
</body>
</html>
