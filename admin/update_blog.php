<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) {
    die("No blog selected.");
}

// Fetch blog
$result = mysqli_query($db, "SELECT * FROM news WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = mysqli_real_escape_string($db, $_POST['blog_title']);
    $story = mysqli_real_escape_string($db, $_POST['blog_story']);

    $image_sql = ""; // default: no image update

    // Upload image if selected
    if (!empty($_FILES['blog_image']['name'])) {

        $image_name = time() . '_' . basename($_FILES['blog_image']['name']);
        $upload_path = "uploads/" . $image_name;

        if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $upload_path)) {

            // IMPORTANT FIX ↓
            $image_sql = "blog_img = '$image_name', ";

        } else {
            $error = "Image upload failed.";
        }
    }

    if (!$error) {

        $sql = "
            UPDATE news 
            SET 
                {$image_sql}
                blog_title = '$title',
                blog_story = '$story'
            WHERE id = '$id'
        ";

        if (mysqli_query($db, $sql)) {
            $success = "Blog updated successfully!";
            $row = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM news WHERE id='$id'"));
        } else {
            $error = mysqli_error($db);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update News</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-lg rounded-xl w-full max-w-3xl p-8 m-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Update Blog</h2>

    <?php if ($error) : ?>
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?= $error ?></div>
    <?php endif; ?>

    <?php if ($success) : ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?= $success ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data" class="space-y-6">

        <!-- Blog Image -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Image</label>
            <?php if (!empty($row['blog_image'])): ?>
                <img src="uploads/<?= $row['blog_img'] ?>" class="w-48 h-32 object-cover rounded mb-2" alt="Current Image">
            <?php endif; ?>
            <input type="file" name="blog_image" class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-upsteamRed file:text-white
                hover:file:bg-red-700
            ">
        </div>

        <!-- Blog Title -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Title</label>
            <input type="text" name="blog_title" value="<?= htmlspecialchars($row['blog_title']) ?>"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-upsteamRed focus:border-upsteamRed">
        </div>

        <!-- Blog Story -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Story</label>
            <textarea name="blog_story" rows="8"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-upsteamRed focus:border-upsteamRed"><?= htmlspecialchars($row['blog_story']) ?></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="bg-dark bg-black text-white font-semibold py-3 px-6 rounded-lg hover:bg-red-800 transition-colors">
                Update Blog
            </button>
        </div>

    </form>
</div>

</body>
</html>
