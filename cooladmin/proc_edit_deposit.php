<?php
session_start();
include('connect.php');
require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $username = trim($_POST['username']); // string, not int
    $package = trim($_POST['package']);
    $payment_method = trim($_POST['payment_method']);
    $amount = floatval($_POST['amount']);
    $profit = floatval($_POST['profit']);
    $wallet_address = trim($_POST['wallet_address']);
    $status = trim($_POST['status']);

    // Fetch user email from registration table using username
    $email_stmt = $conn->prepare("SELECT email FROM registration WHERE username = ? LIMIT 1");
    $email_stmt->bind_param("s", $username);
    $email_stmt->execute();
    $email_result = $email_stmt->get_result();
    if ($email_result->num_rows === 0) {
        header("Location: edit_deposit.php?id=$id&error=" . urlencode("User email not found."));
        exit;
    }
    $user = $email_result->fetch_assoc();
    $email = $user['email'];
    $email_stmt->close();

    // Update deposit record
    $stmt = $conn->prepare("UPDATE deposit 
        SET package=?, payment_method=?, amount=?, profit=?, wallet_address=?, status=? 
        WHERE id=?");

    if ($stmt) {
        $stmt->bind_param("ssddssi", $package, $payment_method, $amount, $profit, $wallet_address, $status, $id);

        if ($stmt->execute()) {
            // Send email notification
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'mail.trustvaultglobal.org';
            $mail->SMTPAuth = true;
            $mail->Username = 'notifications@trustvaultglobal.org';
            $mail->Password = 'TRUSTvaultglobal@1972$$';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('notifications@trustvaultglobal.org', 'Trust Vault Global');
            $mail->addAddress($email, $username);
            $mail->isHTML(true);

            // Subject & Body based on status
            if ($status === 'Approved') {
                $mail->Subject = "Deposit Approved - Trust Vault Global";
                $mail->Body = "
                <div style='font-family: Arial, sans-serif;'>
                    <h3>Dear $username,</h3>
                    <p>Your deposit of <strong>\$$amount</strong> for the <strong>$package</strong> package has been <span style='color:green;'>approved</span>.</p>
                    <p>Your expected profit is <strong>\$$profit</strong>.</p>
                    <p>Thank you for trusting Trust Vault Global.</p>
                    <p style='color:#2e95c4;'>Regards,<br>Trust Vault Global Team</p>
                </div>
            ";
            } elseif ($status === 'Rejected') {
                $mail->Subject = "Deposit Rejected - Trust Vault Global";
                $mail->Body = "
                <div style='font-family: Arial, sans-serif;'>
                    <h3>Dear $username,</h3>
                    <p>We regret to inform you that your deposit of <strong>\$$amount</strong> for the <strong>$package</strong> package has been <span style='color:red;'>rejected</span>.</p>
                    <p>Please contact our support for further assistance.</p>
                    <p style='color:#2e95c4;'>Regards,<br>Trust Vault Global Team</p>
                </div>
            ";
            }

            $mail->send(); // You may also check for errors here if needed

            header("Location: edit_deposit.php?id=$id&success=1");
            exit;
        } else {
            header("Location: edit_deposit.php?id=$id&error=" . urlencode($stmt->error));
            exit;
        }

        $stmt->close();
    } else {
        header("Location: edit_deposit.php?id=$id&error=" . urlencode($conn->error));
        exit;
    }
}
?>
