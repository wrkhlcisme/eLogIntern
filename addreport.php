<?php
session_start();
require('connect.php');

$inputDate = $_POST['inputDate'];
$inputReport = $_POST['inputReport'];
if (isset($inputDate) && isset($inputReport)) {
    $id = $_SESSION['id'];

    $reportquery = "INSERT INTO record (logdate, logreport, userid) VALUES ('$inputDate','$inputReport','$id')";
    if (mysqli_query($connection, $reportquery)) {
        var_dump($reportquery);
        header('Location: pages\user\index.php');
    } else {
        var_dump($reportquery);
        die('database access failed' . mysqli_error($connection));
    }
}
