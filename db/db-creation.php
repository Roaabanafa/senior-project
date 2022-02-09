<?php
$servername = "localhost";
$username = "root";
$password = "mysql";



// Create connection
$link = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

$link = mysqli_connect($servername, $username, $password, "myDB");
$conn = mysqli_connect($servername, $username, $password, "myDB");

// Create tables

// users table
$sql = "CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    user_sex VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    password VARCHAR (50) NOT NULL,
    points INT
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    

    // professionals table
  $sql = "CREATE TABLE professionals (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    user_sex VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    workingHours INT,
    available boolean,
    password VARCHAR (50)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    

        // professionals table
  $sql = "CREATE TABLE professionals (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    user_sex VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    workingHours INT,
    available boolean,
    password VARCHAR (50)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    
   // admin table
  $sql = "CREATE TABLE admins (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR (50)

    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }


       // challenges table
  $sql = "CREATE TABLE challenges (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    challenge VARCHAR(50)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    
$conn->close();
?>
