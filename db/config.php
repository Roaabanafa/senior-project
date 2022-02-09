<?php

$link = mysqli_connect("localhost", "root", "mysql", "myDB");
$conn = mysqli_connect($servername, $username, $password, "myDB");



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>