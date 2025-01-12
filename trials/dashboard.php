<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to MANITConnect!</h1>
    <a href="post.php">Create a Post</a>
    <a href="view_posts.php">View All Posts</a>
    <a href="logout.php">Logout</a>
</body>
</html>
