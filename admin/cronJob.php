<?php

include('connection/connect.php');
require_once('fns.php');
require_once('PHPMailer/PHPMailerAutoload.php');

$query =  ("select * from bookings where dateCreated = '".yesterday()."' and status = 'Pending' ");
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);

for($i=0; $i<$num; $i++)
{
    $row = mysqli_fetch_array($result);

    $subject = 'Your reservation at upstream is canceled';

    $message = "Regrettably, your reservation at upstream is canceled due to non-confirmation of payment. Please contact us urgently to resolve this matter or make a new reservation. We apologize for any inconvenience.,<br><br>
    Reservation Number: ".$row['reserveNo']."<br>

    Check-in Date: ".long_date($row['checkIn'])."<br>
    Check-out Date:  ".long_date($row['checkOut'])."<br>
    Room Type: ".$row['roomType']."<br>
    Number of Nights: ".$row['noNight']."<br>
    ";

    send_email($row['email'], $row['firstname'], organisation(), $subject, $message);

    $update =  mysqli_query($db, "update  bookings set status = 'Canceled'  where dateCreated = '".yesterday()."' ");

    send_sms($row['email'], 'Your reservation at upstream is canceled due to non-confirmation. Check your email for details');
}