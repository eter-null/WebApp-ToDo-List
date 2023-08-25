<?php

include 'connect.php';

$task = $_POST['task'];
$date = $_POST['date'];

$sql = "INSERT INTO todo_list (task, date) VALUES ('$task', '$date')";

if ($conn->query($sql) === TRUE) {
    $updatedTasks = array();
    $result = $conn->query("SELECT * FROM todo_list");
    while ($row = $result->fetch_assoc()) {
        $updatedTasks[] = $row;
    }
    echo json_encode($updatedTasks);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
