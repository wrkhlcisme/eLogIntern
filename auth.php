<?php
//start the session to use variable like $_SESSION[''];
session_start();
//use file connect.php
require('connect.php');

//variable
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];

//isset is used to check either the variable is available or not;
if (isset($username) and isset($password)) {
    //query database
    $query = " SELECT * FROM student where username='$username' and password='$password'";
    //display result
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    $rolequery = " SELECT userid FROM student WHERE username='$username'";
    $roleget = mysqli_query($connection, $rolequery) or die(mysqli_error($connection));

    while ($row = mysqli_fetch_array($roleget)) {
        $id = $row['userid'];
    }


    //user authentication 
    if ($count == 1) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
    } else {
        // $fmsg = "Invalid Login ";
        echo 'login failed';
    }

    if (isset($_SESSION['id']) and isset($_SESSION['username'])) {
        header('location: pages/user/index.php');
    } else {
        echo 'session is not occur';
        // header('location: auth.php/');
    }
}
