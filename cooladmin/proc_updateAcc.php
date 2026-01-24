<?php
include 'connect.php';
require './PHPMailer/PHPMailerAutoload.php';

$success = "";
$error = "";

// Validate required fields
if (empty($_POST['accountid']) || empty($_POST['amount']) || empty($_POST['action']) || empty($_POST['currency'])) {
  $error = "Please fill all required fields.";
  include('update_account.php');
  exit;
}

$accountid = mysqli_real_escape_string($conn, $_POST['accountid']);
$date_time = mysqli_real_escape_string($conn, $_POST['date/time']);
$from = mysqli_real_escape_string($conn, $_POST['from']);
$amount = floatval($_POST['amount']);
$action = mysqli_real_escape_string($conn, $_POST['action']);
$currency = mysqli_real_escape_string($conn, $_POST['currency']);
$reference = mysqli_real_escape_string($conn, $_POST['reference']);
$desc = mysqli_real_escape_string($conn, $_POST['transaction']);
$module = mysqli_real_escape_string($conn, $_POST['transfermodule']);

// Fetch the user record
$userSQL = "SELECT * FROM registration WHERE account_id = '$accountid' LIMIT 1";
$userResult = mysqli_query($conn, $userSQL);
$user = mysqli_fetch_assoc($userResult);

if (!$user) {
  $error = "Account not Found.";
  include('update_account.php');
  exit;
}

$email = $user['email'];
$oldBalance = floatval($user['account_balance']);

// Handle Deposit
if ($action === "Deposit") {
    $newBalance = $oldBalance + $amount;
}

// Handle Withdrawal
elseif ($action === "Withdraw") {

    // Check for insufficient balance
    if ($amount > $oldBalance) {
        $error = "Insufficient Funds to Withdraw.";
        include('update_account.php');
        exit;
    }

    // Deduct the amount
    $newBalance = $oldBalance - $amount;
}

// Update in DB
$updateSQL = "UPDATE registration SET account_balance = '$newBalance' WHERE account_id = '$accountid'";
mysqli_query($conn, $updateSQL);

// Insert transaction record
$insertSQL = "INSERT INTO transactions 
(account_id, username, type, currency, amount, reference, description, created_at)
VALUES 
('$accountid', '{$user['username']}', '$action', '$currency', '$amount', '$reference', '$desc', NOW())";

mysqli_query($conn, $insertSQL);


// Send Email to User
$mail = new PHPMailer();
try {
  $mail->isSMTP();
  $mail->Host = 'mail.trustvaultglobal.org';
  $mail->SMTPAuth = true;
  $mail->Username = 'notifications@trustvaultglobal.org';
  $mail->Password = 'TRUSTvaultglobal@1972$$';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom('notifications@trustvaultglobal.org', 'Trust Vault Global');
  $mail->addAddress($email);

  $mail->isHTML(true);
  $mail->Subject = "Transaction Alert: $action of $$amount";

  // Embed the logo
  $mail->AddEmbeddedImage('./images/logo-black-removebg-preview.png', 'logoimg', 'logo.png');

  $mail->Body = "
        <div style='text-align:center; margin-bottom:20px;'>
            <img src='cid:logoimg' alt='Trust Vault Global Logo' style='width:150px; display:block; margin:0 auto;'>
        </div>

        <h3>Hello {$user['firstname']},</h3>
        <p>Your account has a new <strong>$action</strong> transaction.</p>
        <p><strong>Amount:</strong> $$amount</p>
        <p><strong>Currency:</strong> $currency</p>
        <p><strong>From:</strong> $from</p>
        <p><strong>Description:</strong> $desc</p>
        <p><strong>New Balance:</strong> $$newBalance</p>
        <br>
        <p>Thank you for investing with us.</p>
        <p><strong>Trust Vault Global</strong></p>
    ";

  $mail->send();

} catch (Exception $e) {
  // email failed silently
}

$success = "Account Updated Successfully";
include('update_account.php');
exit;

?>