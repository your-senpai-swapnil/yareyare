<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

echo $name . "<br>";
echo $email . "<br>";
echo $message . "<br>";
}