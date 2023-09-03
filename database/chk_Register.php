<?php

//session_start();

require_once 'db_connection.php';


$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$sql = "SELECT 
            * 
        FROM 
            users 
        WHERE 
            username = '$username' 
        AND 
            password = '$password'
        AND    
            confirmpassword = '$confirmpassword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    echo "Register successful.";
} else {
    echo "wrong username or password.";
}

mysqli_close($conn);