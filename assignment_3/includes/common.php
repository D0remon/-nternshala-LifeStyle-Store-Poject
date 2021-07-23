<?php
$connection=mysqli_connect("localhost","root","","store") or die (mysqli_error($connection));
if(!isset($_SESSION)){
    session_start();
}
