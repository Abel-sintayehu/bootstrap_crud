<?php
include('db_connection.php'); 

$full_name = $email = $message = $id = '';
$edit_state = false;

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message (full_name, email, message) VALUES ('$full_name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?status=success');
        exit();
    } else {
        header('Location: index.php?status=error');
        exit();
    }
}