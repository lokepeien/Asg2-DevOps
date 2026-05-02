<?php
$server   = getenv('DB_HOST')     ?: 'localhost';
$user     = getenv('DB_USER')     ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$database = getenv('DB_NAME')     ?: 'asg_3';

$conn = mysqli_connect($server, $user, $password, $database);