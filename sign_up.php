<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>

    </style>
</head>
<body>
    <form action="signup_save.php" method="post">
        <div class="signup_form">
        <h1>Sign up Form</h1>
        <label for="firstname">First name:</label><br>
        <input type="text" id="fname" name="f_name"><br>
        <label for="lastname">Last name: </label><br>
        <input type="text" id ="lname" name="l_name"><br>
        <label for="dob">Date Of Birth: </label><br>
        <input type="date" id ="dob" name="dob"><br><br>
        <label for ="male">Male</label>
        <input type="radio" id="gender" name="gender" value="Male"><br>
        <label for ="female">Female</label>
        <input type="radio" id="gender" name="gender" value="female"><br>
        <label for ="others">Others</label>
        <input type="radio" id="gender" name="gender" value="others"><br><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="e_mail"placeholder="Email"><br><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="password" id="password" palceholder="password"><br><br>
        <label for="pass">Confirm password:</label><br>
        <input type="password" name="c_password"id="c_password" palceholder="Confirm password"><br><br>
        <input type ="submit" value="submit"><br>

    </form>
</div>
</body>
</html>
