<!DOCTYPE html>
<html>

<head>
    <title>Todo App</title>
</head>

<body>
    <h1>Todo List</h1>
    <form action="add_todo.php" method="post">
        <input type="text" name="todo" id="todo" placeholder="Enter Todo">

        <br>
        <br>

        <label for="due_date">Due Date:</label>
        <input type="date" name="dueDate" id="dueDate">

        <br>
        <br>

        <input type="submit" value="Add">
    </form>

    <h1>Tasks:</h1>
    <table border="1">
        <tr>
            <th>To Do Item</th>
            <th>Due Date</th>

            <?php
            // Check if the 'todo' parameter exists in the URL.
            // If the todo exists the todo item & due date will be displayed in a new row in the table
            if (isset($_GET['todo']) && isset($_GET['dueDate'])) {
                // Get the todo from the URL parameter and display it as a list item
                $todo = $_GET['todo'];
                $dueDate = $_GET['dueDate'];
                echo '<tr>';
                echo '<td>' . htmlspecialchars($todo) . '</td>';
                echo '<td>' .  htmlspecialchars($dueDate) . '</td>';
                echo '</tr>';
            }

            // If no items have been added to the list, the below message will be displayed
            if (empty($_GET['todo']) && empty($_GET['dueDate'])) {
                echo "No items displayed.";
            }
            ?>
        </tr>
    </table>
</body>

</html>