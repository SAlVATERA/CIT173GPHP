<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = "JohnDo";
$email = "john@example.com";
$id = "1";

// // $sql = "INSERT INTO users (id,username, email) VALUES ('$id','$username', '$email')";

// if ($conn->query($sql) === TRUE) {
//     echo "Record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$newUsername = "UpdatedJohnDoe";
$idToUpdate = 1;

$sql = "UPDATE users SET username='$newUsername' WHERE id=$idToUpdate";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>