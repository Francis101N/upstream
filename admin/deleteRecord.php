<?php

include('connection/connect.php');

$id = $_GET['id'];

$query = "delete from contacts where id = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
    $success = "Bookking has been deleted";
    include('messages.php');
    exit;
} else {
    $error = "Cannot run query";
    include('messages.php');
    exit;
}
