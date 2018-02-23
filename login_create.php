<?php include "db.php";?>
<?php include "functions.php";?>

<?php createUser(); ?>

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
              <h1 class="text-center">Create</h1>
               <form action="login_create.php" method="post">
                  
                   <div class="form-group">
                       <label for="">Username</label>
                       <input type="text" name="username" class="form-control">
                   </div>
                   
                   <div class="form-group">
                       <label for="">Password</label>
                       <input type="password" name="password" class="form-control">
                   </div>
                   
                   <input type="submit" class="btn btn-primary" name="submit" value="CREATE">
               </form>
               
           </div>
       </div>
   </div>
   
    
</body>
</html>