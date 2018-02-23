<?php include "db.php"; ?>
<?php include "functions.php" ?>


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
              <h1 class="text-center">All Users</h1>
              <table class="table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>
                             ID
                         </th>
                         <th>
                             Username
                         </th>
                         <th>
                             Password
                         </th>
                     </tr>
                 </thead>
                 <tbody>
                        <?php
                           showUserRow();
                         ?>
                 </tbody>
                  
              </table>
           </div>
       </div>
   </div>
   
    
</body>
</html>