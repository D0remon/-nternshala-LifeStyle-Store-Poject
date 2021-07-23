<?php
require './includes/common.php';
// get details
$name = mysqli_real_escape_string($connection, $_POST["name"]);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    header('location: index.php?email_error=enter correct email');
}
$email = mysqli_real_escape_string($connection, $_POST["email"]);
if (strlen($password) < 8) {
    header('location: index.php?password_error=enter correct password');
}
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$contact = mysqli_real_escape_string($connection, $_POST["contact"]);
$city = mysqli_real_escape_string($connection, $_POST["city"]);
$address = mysqli_real_escape_string($connection, $_POST["address"]);
// hash password
$hashed_password = md5($password);
$query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
$query2 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hashed_password', '$contact', '$city', '$address')";

// check if already registered user
$result = mysqli_query($connection, $query1);
if (mysqli_num_rows($result) > 0) {
    // email already exists
    echo "Email id already exists";
} else {
    // perform query operation
    $result = mysqli_query($connection, $query2);
    $_SESSION["email"] = $email;
    $_SESSION["id"] = mysqli_insert_id($conn);

    // redirect to products page
    header("location: products.php");
}
