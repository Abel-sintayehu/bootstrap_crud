<?php
include('db_connection.php'); 

$full_name = $email = $message = $id = '';
$edit_state = false;

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message (id, full_name, email, message) VALUES (12,'hasdasd', 'test@test.com', 'asdasdasda')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?status=success');
        exit();
    } else {
        header('Location: index.php?status=error');
        exit();
    }
}

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM message WHERE id=12";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?status=success');
        exit();
    } else {
        header('Location: index.php?status=error');
        exit();
    }
}