<?php
$name = $_POST['name'];
$address = $_POST['address'];

$conn = mysqli_connect('localhost','root','','record');
$query = "INSERT INTO `arpit`(`name`, `address`) VALUES ('$name','$address')";
$result = mysqli_query($conn, $query);
?>