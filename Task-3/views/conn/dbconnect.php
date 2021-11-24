<?php
$server = 'localhost';
$username = 'root';
$password = 'Happy';
$database = 'result';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Sorry! something went wrong";
}

?>

