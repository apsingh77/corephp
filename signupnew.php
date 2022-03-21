<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        
    </style>
</head>
<body>
    <dic class="container">
    <form action="signup_save.php" method="post">
        <h3 style="text-align:center">Register Here</h3>
        <div class="col-sm-6" style="margin-left:25%">
            <!--<div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control"  placeholder="Enter email" >
            </div>-->

            <div class="form-group" >
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" class="form-control"  placeholder="Enter first name" >
            </div>

            <div class="form-group" >
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname" class="form-control"  placeholder="Enter last name" >
            </div>

            <!--<div class="form-group" >
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="pwd" class="form-control"  placeholder="Enter Password" >
            </div>-->
            <div class="form-group" >
                <label for="dob">Date of birth:</label>
                <input type="date" id="dob" name="dob" class="form-control"  placeholder="date of birth" >
            </div>
            <div class="form-group" >
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Others</option>
                </select>
            </div>
            
            <div class="form-group" >
                <label for="email">Email:</label>
                <input type="text" id="e_mail" name="email" class="form-control"  placeholder="Enter email" >
            </div>
            
            <div class="form-group" >
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" class="form-control"  placeholder="Enter password" >
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Submit</button>
            </div>

        </div>
        
        
        


    </form>
</div>
</body>
</html>