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
    <div>
        
        <form action="loginnew_save.php" method="post">
        <h3 style="text-align:center">Login</h3>
        <div class="col-sm-6" style="margin-left:25%">
        <div class="form-group" >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control"  placeholder="Enter username" >
            </div>
            
            <div class="form-group" >
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" class="form-control"  placeholder="Enter password" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Submit</button>
            </div>

         </form>
     </div>
</body>
</html>
