<?php
session_start();
include('connection/connect.php');

// Make sure admin is logged in
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? null;
    $blog_title = trim($_POST['blog_title']);
    $blog_story = trim($_POST['blog_story']);

    if (!$id || empty($blog_title) || empty($blog_story)) {
        $_SESSION['error'] = "All fields except image are required.";
        header("Location: update_news.php?id=$id");
        exit;
    }

    // Handle image upload
    $blog_image_sql = "";
    if (isset($_FILES['blog_image']) && $_FILES['blog_image']['error'] == 0) {

        $allowed = ['jpg','jpeg','png','gif'];
        $file_name = $_FILES['blog_image']['name'];
        $file_tmp = $_FILES['blog_image']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed)) {
            $_SESSION['error'] = "Invalid image format. Allowed: jpg, jpeg, png, gif.";
            header("Location: update_news.php?id=$id");
            exit;
        }

        // Create unique name
        $new_file_name = time().'_'.$file_name;
        $destination = 'uploads/' . $new_file_name;

        if (move_uploaded_file($file_tmp, $destination)) {
            $blog_image_sql = "blog_image = ?,";
            $uploaded_image = $new_file_name;
        } else {
            $_SESSION['error'] = "Failed to upload image.";
            header("Location: update_news.php?id=$id");
            exit;
        }
    }

    // Prepare SQL update
    if ($blog_image_sql) {
        $sql = "UPDATE registration SET $blog_image_sql blog_title = ?, blog_story = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $uploaded_image, $blog_title, $blog_story, $id);
    } else {
        $sql = "UPDATE registration SET blog_title = ?, blog_story = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $blog_title, $blog_story, $id);
    }

    // Execute statement
    if ($stmt->execute()) {
        $_SESSION['success'] = "Blog updated successfully!";
        header("Location: update_news.php?id=$id&success=1");
        exit;
    } else {
        $_SESSION['error'] = "Failed to update blog: " . $conn->error;
        header("Location: update_news.php?id=$id");
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
