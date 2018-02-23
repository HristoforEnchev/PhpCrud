<?php

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
                               // server, def. root, def.pass, db
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if($connection){
        echo "We are conected";
    } else {
        die("Connection failed!");
    }
    
    
}
    
    
    /*if($username && $password){
        echo $username . "<br>";    
        echo $password . "<br>";
    } else {
        echo "Fill both fields";
    }*/




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  
   
   <div class="container">
       <div class="row">
           <div class="col-sm-6">
              
               <form action="login.php" method="post">
                  
                   <div class="form-group">
                       <label for="">Username</label>
                       <input type="text" name="username" class="form-control">
                   </div>
                   
                   <div class="form-group">
                       <label for="">Password</label>
                       <input type="password" name="password" class="form-control">
                   </div>
                   
                   <input type="submit" class="btn btn-primary" name="submit">
               </form>
               
           </div>
       </div>
   </div>
   
    
</body>
</html>