<?php
$conn=mysqli_connect("localhost","root","","nicu");
if(!$conn){
    die("connection failed"
    .mysqli_connect_error());
}
?>