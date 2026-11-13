<?php
$host = "localhost";
$user = "root"; 
$password = "";
$database = "iwt-all";

$conn = mysqli_connect($host, $user, $password, $database);
if ($conn) {
    echo "Connection successful";
}else {
    echo "connection failed";
}
?>