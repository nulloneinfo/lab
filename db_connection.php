<?php
// DB Connection
$server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "uni";

$conn = new mysqli($server_name, $db_user_name, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection Success <br>";

// Collect POST data
$st_name = $_POST['st_name'];
$st_id = $_POST['st_id'];
$semester = $_POST['semester'];

// Insert new record
$sql = "INSERT INTO student_info (st_name, st_id, semester) VALUES ('" . $st_name . "', '" . $st_id . "', '" . $semester . "')";
echo "SQL Insert: " . $sql . "<br>";

if ($conn->query($sql) === TRUE) {
    echo "<br> New record created successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Query to select records from student_info
$sql_read_data = "SELECT * FROM student_info ORDER BY id DESC";

// Execute query and check if the result is valid
$result = $conn->query($sql_read_data);

if ($result) {  // Check if the query was successful
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ST ID: " . $row['id'] . " ST Name: " . $row["st_name"] . " ST REG NO: " . $row["st_id"] . " Semester: " . $row["semester"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    // Handle query failure
    echo "Error executing query: " . $conn->error;
}

// Close the connection
$conn->close();
?>
