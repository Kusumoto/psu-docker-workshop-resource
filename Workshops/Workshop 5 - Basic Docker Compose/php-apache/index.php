<?php
$mysqli = new mysqli("mysql", "root", "123456");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "Connected"
}