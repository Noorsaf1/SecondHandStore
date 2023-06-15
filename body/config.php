<?php

 

$host = "localhost";
$db = "SecondHandStore";
$user  = "root";
$password = "root";

 

// Skapa anslutning
$conn = new mysqli($host, $user, $password, $db);

 

// Kolla anslutning
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}