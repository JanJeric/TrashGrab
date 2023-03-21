<?php
    include('connection.php');
    $title = $_POST['title'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');
    $query = mysqli_query($conn, "INSERT INTO notifications (title, message, created_at) VALUES ('$title', '$message', '$created_at')");
    if ($query) {
        header('Location: create_notification.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>