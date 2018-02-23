<?php                       // server, def. root, def.pass, db
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
                                       // username
    if(!$connection){
        die("Connection failed!");
    }

?>