<?php include "functions.php" ?>

<?php

    insertData();

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
          <div class="col-md-5">
              <h1 class="text-center">Create User</h1>
              <form action="create.php" method="post">
                  <div class="form-group">
                      <label for="">First Name</label>
                      <input name="firstName" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Last Name</label>
                      <input name="lastName" type="text" class="form-control">
                  </div><div class="form-group">
                      <label for="">Age</label>
                      <input name="age" type="number" class="form-control">
                  </div>
                  <input class="btn btn-primary" type="submit" name="submit" value="Create">
              </form>
          </div>
      </div>
  </div>
   
    
</body>
</html>