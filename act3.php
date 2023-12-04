<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
    // reading sql query
    
    // $sql = "SELECT id, username, email FROM users";
    // $result = $conn->query($sql);
    
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    
    // updating values
    
    // $newUsername = "UpdatedJohnDoe";
    // $idToUpdate = 1;
    
    // $sql = "UPDATE users SET username='$newUsername' WHERE id=$idToUpdate";
    
    // if ($conn->query($sql) === TRUE) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . $conn->error;
    // }
    
    //delete query
    
    // $idToDelete = 1;
    
    // $sql = "DELETE FROM users WHERE id=$idToDelete";
    
    // if ($conn->query($sql) === TRUE) {
    //     echo "Record deleted successfully";
    // } else {
    //     echo "Error deleting record: " . $conn->error;
    // }
    
    $conn->close();
    ?>  
</body>
</html>