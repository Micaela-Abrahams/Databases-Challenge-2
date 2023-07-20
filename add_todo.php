<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('index.php'); // Include the connection file
include('connect.php'); // Include the connection file

// Storing post superglobal values as variables
$todo = $_POST['todo'];
$dueDate = $_POST['dueDate'];

// Insert statement stored in a variable
$sql = "INSERT INTO tasks (task_name, due_date)
VALUES ($todo, $dueDate)"; // Inserting variable values as new records 

// Check whether insert was successful
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
