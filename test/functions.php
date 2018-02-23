<?php include "db.php"; ?>

<?php

    function readData(){
        
        global $connection;
        
        $query = "SELECT * FROM users";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("Query failed!" . mysqli_error($connection));
        }
        
        while($row = mysqli_fetch_assoc($result)){
            
            $res = "<tr><td>{$row['id']}</td>";
            $res .= "<td>{$row['first_name']}</td>";
            $res .= "<td>{$row['last_name']}</td>";
            $res .= "<td>{$row['age']}</td></tr>";

            echo $res;

        }


    }

    function insertData(){
        
        global $connection;
        
        if(isset($_POST['submit'])){
            
            
            $firstName = $_POST['firstName'];           $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            
            $query = "INSERT INTO users( first_name, last_name, age) VALUES('$firstName', '$lastName', $age)";
            
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("Query Failed" . mysqli_error($connection));
            } else {
                echo "<div class='alert alert-success'>User Added</div>";
            }

        }
    }

?>