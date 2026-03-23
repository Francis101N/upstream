<?php
session_start();
include('connection/connect.php');

// Ensure admin is logged in
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: add_news.php?error=Invalid request");
    exit;
}

// Sanitize inputs
$title = mysqli_real_escape_string($db, trim($_POST['blog_title']));
$story = mysqli_real_escape_string($db, trim($_POST['blog_story']));

// Validate
if ($title === '' || $story === '' || empty($_FILES['blog_image']['name'])) {
    header("Location: add_news.php?error=All fields are required");
    exit;
}

// Handle image upload
$imageName = time() . '_' . basename($_FILES['blog_image']['name']);
$uploadDir = 'uploads/';
$uploadPath = $uploadDir . $imageName;

// Create uploads folder if not exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (!move_uploaded_file($_FILES['blog_image']['tmp_name'], $uploadPath)) {
    header("Location: add_news.php?error=Image upload failed");
    exit;
}

// Insert into database
$sql = "INSERT INTO news (blog_img, blog_title, blog_story, date_created)
        VALUES ('$imageName', '$title', '$story', NOW())";

if (mysqli_query($db, $sql)) {
    header("Location: add_news.php?success=News published successfully");
    exit;
} else {
    header("Location: add_news.php?error=Database error");
    exit;
}
?>
