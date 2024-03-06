<?php
// Replace these values with your actual database credentials
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM your_table";  // Replace 'your_table' with the actual table name

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch data and print it
    while ($row = $result->fetch_assoc()) {
        // Access individual columns using $row['column_name']
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
