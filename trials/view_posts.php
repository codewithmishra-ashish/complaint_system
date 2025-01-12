<?php
include 'db.php';

$result = $conn->query("SELECT posts.content, users.name, posts.created_at FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div>
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['content']; ?></p>
            <small>Posted on: <?php echo $row['created_at']; ?></small>
        </div>
        <hr>
    <?php endwhile; ?>
</body>
</html>
