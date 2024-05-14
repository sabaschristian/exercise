<?php

session_start();
include('./db/connection.php');

$username = $password = '';

$errors = array('username' => '', 'password' => '');

if(isset($_POST['submit'])){

    //check username
    if(empty($_POST['username'])){
        $errors['username'] = 'Please enter a username';
    }

    //check password
    if(empty($_POST['password'])){
        $errors['password'] = 'Please enter a password';
    }

    if(array_filter($errors)){

    } else {
        $username = mysqli_real_escape_string($conn, ($_POST['username']));
        $password = mysqli_real_escape_string($conn, ($_POST['password']));
        
        $query = "SELECT * FROM admin where username='$username' and password='$password' LIMIT 1";
        $query_run = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_array($query_run);
    
            // Authenticating Logged In User
            $_SESSION['authentication'] = true;
    
            // Storing Authenticated User data in Session
            $_SESSION['auth_user'] = [
                'admin_id'=>$row['id'],
                'username'=>$row['username']
            ];
    
            $_SESSION['message'] = "You are Logged In Successfully"; //message to show
            header("Location: dashboard.php");
            exit(0);

        }
        else
        {
            $_SESSION['message'] = "Invalid Username or Password"; //message to show
            header("Location: login.php");
            exit(0);
        }
    }
}

?>