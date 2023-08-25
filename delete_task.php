<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$taskId = $_POST['taskId'];

$sql = "DELETE FROM todo_list WHERE id = $taskId";

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
