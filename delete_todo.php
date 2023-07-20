<?php
if (isset($_GET['id'])) {
    $todo_id = $_GET['id'];

    include('db_config.php');

    $sql = "DELETE FROM todos WHERE id=$todo_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect back to the main page after deleting
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
