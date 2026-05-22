<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

include("connection.php");

if (isset($_POST['blogTitle']) && isset($_POST['blogPost'])) {

    // If preview button was clicked
    if (isset($_POST['preview'])) {
        $_SESSION['preview'] = [
            'title' => $_POST['blogTitle'],
            'content' => $_POST['blogPost']
        ];
        header("Location: addEntry.php");
        exit();
    }

    // If post/upload button was clicked
    $title = mysqli_real_escape_string($conn, $_POST['blogTitle']);
    $content = mysqli_real_escape_string($conn, $_POST['blogPost']);
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $sql = "INSERT INTO blog_posts (title, content, date_posted, time_posted) 
            VALUES ('$title', '$content', '$date', '$time')";

    if (mysqli_query($conn, $sql)) {
        // Clear preview data after successful post
        unset($_SESSION['preview']);
        header("Location: viewBlog.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>