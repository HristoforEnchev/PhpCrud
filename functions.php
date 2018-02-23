<?php include "db.php"; ?>


<?php

function createUser(){
    global $connection;
    
    if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    
    $query = "INSERT INTO users (username, password) ";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed". mysqli_error($connection));
    } else {
        echo "<div class='alert alert-success'>Record Created</div>";
    }
    
    }
    
}

function showIdSelect(){

    global $connection;
    
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
                              
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
    
}

function showUserRow(){
    
    global $connection;
    
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    }

                                          //row
    while($row = mysqli_fetch_assoc($result)){
         
        $res = "<tr><td>{$row['id']}</td>";
        $res .= "<td>{$row['username']}</td>";
        $res .= "<td>{$row['password']}</td></tr>";
        
        
        
        echo $res;
        
       
        
       
            
    }
            
    
}

function UpdateTable(){
    
    if(isset($_POST['submit'])){
        global $connection;

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE users";
        $query .= " SET username = '$username', password = '$password' WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query failed". mysqli_error($connection));
        } else {
        echo "<div class='alert alert-success'>Record Updated</div>";
        }
    }
    
}

function DeleteTable(){
        
    if(isset($_POST['submit'])){
        
        global $connection;

        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query failed" . mysqli_error($connection));
        } else {
        echo "<div class='alert alert-success'>Delete User</div>";
    }
    }
}


?>




