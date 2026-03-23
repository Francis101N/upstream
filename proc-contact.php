<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
include('connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize inputs
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        echo "<script>
                alert('All fields are required.');
                window.history.back();
              </script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                alert('Invalid email address.');
                window.history.back();
              </script>";
        exit;
    }

    // Escape for DB
    $db_name    = mysqli_real_escape_string($db, $name);
    $db_email   = mysqli_real_escape_string($db, $email);
    $db_subject = mysqli_real_escape_string($db, $subject);
    $db_message = mysqli_real_escape_string($db, $message);

    // Insert into contacts table
    $insert = mysqli_query(
        $db,
        "INSERT INTO contacts (fullnames, email, subject, message)
         VALUES ('$db_name', '$db_email', '$db_subject', '$db_message')"
    );

    if (!$insert) {
        echo "<script>
                alert('Failed to save message. Please try again.');
                window.history.back();
              </script>";
        exit;
    }

    // Escape for email output
    $safeName    = htmlspecialchars($name);
    $safeEmail   = htmlspecialchars($email);
    $safeSubject = htmlspecialchars($subject);
    $safeMessage = nl2br(htmlspecialchars($message));

    // Email to Admin
    $adminSubject = "New Contact Message: {$safeSubject}";
    $adminBody = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Full Name:</strong> {$safeName}</p>
        <p><strong>Email:</strong> {$safeEmail}</p>
        <p><strong>Subject:</strong> {$safeSubject}</p>
        <p><strong>Message:</strong><br>{$safeMessage}</p>
        <hr>
        <p>Sent from Upstream website.</p>
    ";

    // Auto-reply to User
    $userSubject = "We have received your message";
    $userBody = "
        <h3>Hello {$safeName},</h3>
        <p>Thank you for contacting us.</p>
        <p>Your message has been received and our team will respond shortly.</p>
        <br>
        <p>Best regards,<br>
        Upstream Team</p>
    ";

    // PHPMailer Setup
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.techbyfrancis.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'portfolio@techbyfrancis.com';
        $mail->Password   = 'TECHbyfrancis101$$';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('portfolio@techbyfrancis.com', 'Upstream Notification');
        $mail->isHTML(true);

        // Send to Admin
        $mail->addAddress('contact@upstreaminnigeria.com');
        $mail->Subject = $adminSubject;
        $mail->Body    = $adminBody;
        $mail->send();

        // Send confirmation to User
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = $userSubject;
        $mail->Body    = $userBody;
        $mail->send();

        echo "<script>
                alert('Message sent successfully! We will get back to you shortly.');
                window.location.href = 'contact';
              </script>";

    } catch (Exception $e) {
        echo "<script>
                alert('Message saved but email failed. Please try again later.');
                window.history.back();
              </script>";
    }

} else {
    echo "<script>
            alert('Invalid request.');
            window.location.href = 'contact';
          </script>";
}
?>
