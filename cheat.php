 
   
<?php
                            // server, def. root, def.pass, db
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result){
    die("Query failed" . mysqli_error());
}



<?php
                              //row
    while($row = mysqli_fetch_assoc($result)){
?>

<pre>

<?php
    print_r($row); 
?> 

</pre>

<?php
    }
?>








?>
   
   
    