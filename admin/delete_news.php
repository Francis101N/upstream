<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: news?error=Invalid request");
    exit;
}

$id = intval($_GET['id']);

$query = mysqli_query($db, "SELECT blog_img FROM news WHERE id = '$id'");
if (!$query || mysqli_num_rows($query) === 0) {
    header("Location: news?error=Blog not found");
    exit;
}

$row = mysqli_fetch_assoc($query);
$imagePath = 'uploads/' . $row['blog_img'];

$delete = mysqli_query($db, "DELETE FROM news WHERE id = '$id'");

if ($delete) {

    if (!empty($row['blog_img']) && file_exists($imagePath)) {
        unlink($imagePath);
    }

    header("Location: news?success=Blog deleted successfully");
    exit;

} else {
    header("Location: news?error=Failed to delete blog");
    exit;
}
?>
