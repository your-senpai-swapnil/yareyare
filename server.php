<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "dummydb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql_query($conn, "INSERT INTO users (name, email, id) VALUES ('$name', '$email', '$id')");
    $conn->query($sql_query);
    
    echo "Data submitted successfully!<br>";
}
?>
