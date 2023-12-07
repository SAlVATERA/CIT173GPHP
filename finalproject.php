<!DOCTYPE html>
<html>
<head>
    <title>Management System</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salvatera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function performCRUD($table)
{
    global $conn;

    // Create
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_'.$table])) {
        $name = $_POST[$table.'_name'];
        $email = $_POST[$table.'_email'];
        $details = $_POST[$table.'_details'];

        $sql = "INSERT INTO $table (name, email, details) VALUES ('$name', '$email', '$details')";

        if ($conn->query($sql) === TRUE) {
            echo "New $table created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Read
    $sql = "SELECT id, name, email, details FROM $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>View $table</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Details: " . $row["details"] . "<br>";
        }
    } else {
        echo "<h2>View $table</h2>";
        echo "0 results";
    }

    // Update
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_'.$table])) {
        $id = $_POST[$table.'_id'];
        $name = $_POST[$table.'_name'];
        $email = $_POST[$table.'_email'];
        $details = $_POST[$table.'_details'];

        $sql = "UPDATE $table SET name='$name', email='$email', details='$details' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Delete
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_'.$table])) {
        $id = $_POST[$table.'_id'];

        $sql = "DELETE FROM $table WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Perform CRUD operations for different entities
performCRUD('users');
performCRUD('students');
performCRUD('courses');
performCRUD('instructors');
?>

<hr>

<h2>Create User</h2>
<form action="" method="post">
    Name: <input type="text" name="users_name"><br>
    Email: <input type="text" name="users_email"><br>
    Details: <input type="text" name="users_details"><br>
    <input type="submit" name="create_users" value="Create User">
</form>

<hr>

<h2>Create Student</h2>
<form action="" method="post">
    Name: <input type="text" name="students_name"><br>
    Email: <input type="text" name="students_email"><br>
    Details: <input type="text" name="students_details"><br>
    <input type="submit" name="create_students" value="Create Student">
</form>

<hr>

<h2>Create Course</h2>
<form action="" method="post">
    Name: <input type="text" name="courses_name"><br>
    Email: <input type="text" name="courses_email"><br>
    Details: <input type="text" name="courses_details"><br>
    <input type="submit" name="create_courses" value="Create Course">
</form>

<hr>

<h2>Create Instructor</h2>
<form action="" method="post">
    Name: <input type="text" name="instructors_name"><br>
    Email: <input type="text" name="instructors_email"><br>
    Details: <input type="text" name="instructors_details"><br>
    <input type="submit" name="create_instructors" value="Create Instructor">
</form>

<hr>

<h2>Update/Delete User</h2>
<form action="" method="post">
    User ID: <input type="text" name="users_id"><br>
    New Name: <input type="text" name="users_name"><br>
    New Email: <input type="text" name="users_email"><br>
    New Details: <input type="text" name="users_details"><br>
    <input type="submit" name="update_users" value="Update User">
    <input type="submit" name="delete_users" value="Delete User">
</form>

<hr>

<h2>Update/Delete Student</h2>
<form action="" method="post">
    Student ID: <input type="text" name="students_id"><br>
    New Name: <input type="text" name="students_name"><br>
    New Email: <input type="text" name="students_email"><br>
    New Details: <input type="text" name="students_details"><br>
    <input type="submit" name="update_students" value="Update Student">
    <input type="submit" name="delete_students" value="Delete Student">
</form>

<hr>

<h2>Update/Delete Course</h2>
<form action="" method="post">
    Course ID: <input type="text" name="courses_id"><br>
    New Name: <input type="text" name="courses_name"><br>
    New Email: <input type="text" name="courses_email"><br>
    New Details: <input type="text" name="courses_details"><br>
    <input type="submit" name="update_courses" value="Update Course">
    <input type="submit" name="delete_courses" value="Delete Course">
</form>

<hr>

<h2>Update/Delete Instructor</h2>
<form action="" method="post">
    Instructor ID: <input type="text" name="instructors_id"><br>
    New Name: <input type="text" name="instructors_name"><br>
    New Email: <input type="text" name="instructors_email"><br>
    New Details: <input type="text" name="instructors_details"><br>
    <input type="submit" name="update_instructors" value="Update Instructor">
    <input type="submit" name="delete_instructors" value="Delete Instructor">
</form>

</body>
</html>
