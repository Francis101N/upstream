<?php

include('connection/connect.php');

$id = mysqli_real_escape_string($db, $_POST['id']);
$status = mysqli_real_escape_string($db, $_POST['paymentType']);

$query = "update  bookings set status = '$status' where token = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
    $success = "Booking has been updated";
    include('bookings.php');
    exit;
} else {
    $error = "An error occured, try again";
    include('bookings.php');
    exit;
}

  