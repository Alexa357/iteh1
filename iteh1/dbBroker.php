<?php
$host = "localhost";
$db = "automobili";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_errno) {
    exit("Neuspesno povezivanje sa bazom: " . $conn->connect_errno);
}