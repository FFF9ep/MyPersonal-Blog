<?php require "../../config/config.php"; ?>

<?php

if (isset($_GET['po_id'])) {
    $id = $_GET['po_id'];
    $delete = $conn->prepare("DELETE FROM posts WHERE id = :id");
    $delete->execute([
        ':id' => $id
    ]);
    header('location: http://localhost/fandiblog/admin-panel/posts-admins/show-posts.php');
} else {
    header("location: http://localhost/fandiblog/404.php");
}

?>