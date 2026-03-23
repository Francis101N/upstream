<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl w-full max-w-3xl p-8 m-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add News / Insight</h2>

    <?php if ($error): ?>
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form action="proc-add-news.php" method="POST" enctype="multipart/form-data" class="space-y-6">

        <!-- Blog Image -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Image</label>
            <input type="file" name="blog_image" required
                class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-[#601000] file:text-white
                hover:file:bg-red-800">
        </div>

        <!-- Blog Title -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Title</label>
            <input type="text" name="blog_title" required
                class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#601000]">
        </div>

        <!-- Blog Story -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Blog Story</label>
            <textarea name="blog_story" rows="8" required
                class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#601000]"></textarea>
        </div>

        <!-- Submit -->
        <div class="flex justify-end gap-3">
            <a href="news" class="px-6 py-3 rounded-lg border text-gray-600 hover:bg-gray-100">
                Cancel
            </a>
            <button type="submit"
                class="bg-[#601000] text-white font-semibold py-3 px-6 rounded-lg hover:bg-red-800 transition">
                Publish News
            </button>
        </div>

    </form>
</div>

</body>
</html>
