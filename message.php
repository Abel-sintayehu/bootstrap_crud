<?php
include('db_connection.php');

// Initialize variables
$full_name = $email = $message = $id = '';
$notification_state = '';
$notification = '';

//select single item
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $sql = "SELECT * FROM message WHERE id = $id LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $full_name = $row['full_name'];
        $email = $row['email'];
        $message = $row['message'];
    } else {
        $notification_state = 'error';
        $notification = "No record found with ID: $id";
    }
}

// Update Operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "UPDATE message SET full_name='$full_name', email='$email', message='$message' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $notification_state = 'success';
        $notification = "Record updated successfully";
    } else {
        $notification_state = 'error';
        $notification = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete Operation
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM message WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $notification_state = 'success';
        $notification = "Record deleted successfully";
    } else {
        $notification_state = 'error';
        $notification = "Error deleting record: " . $conn->error;
    }
}

// Read (Retrieve) all records
$sql = "SELECT * FROM message";
$messages = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap PHP MySQL CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Messages</h2>

    <form action="message.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="full_name" value="<?php echo $full_name; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" id="message" rows="5" required><?php echo $message; ?></textarea>
        </div>

        <button type="submit" name="update" class="btn btn-success">Update</button>
    </form>

<hr>

<h3> List of Messages </h3>
    <?php if ($notification_state !=''): ?>
        <div class="container mt-3">
            <?php if ($notification_state == 'success'): ?>
                <div class="alert alert-success">
                    <?php echo $notification; ?>
                </div>
            <?php elseif ($notification_state == 'error'): ?>
                <div class="alert alert-danger">
                    <?php echo $notification; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $messages->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td>
                    <a href="message.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                </td>
                <td>
                    <a href="message.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
