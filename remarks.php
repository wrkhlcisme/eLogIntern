<?php
session_start();
require('connect.php');

$id = $_POST['recordId'];
$remarkInput = $_POST['inputRemarks'];

$remarkQuery = "UPDATE record SET remark='$remarkInput' where logid='$id'";
$remarkpost = mysqli_query($connection, $remarkQuery);

if ($remarkpost == '1') {
    header('Location: pages/sv/index.php');
} else {
    echo 'problem';
}
