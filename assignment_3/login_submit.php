<?php
require './includes/common.php';
$email=mysqli_real_escape_string($connection,$_POST["email"]);
$password=mysqli_real_escape_string($connection,$_POST["password"]);
$secured_password=md5($password);
$select="SELECT * FROM users WHERE email='$email' and password='$secured_password'";
$select_query=mysqli_query($connection,$select);
if (mysqli_num_rows($select_query)==0) {
    echo("User account does not exist");
}
else{
    $row=mysqli_fetch_array($select_query);
    $_SESSION["email"]=$email;
    $_SESSION["id"]=$row["id"];
    header("location:products.php");
}
