<?php

// edit the following configuration to match yours
$server = 'neotopia';
$user = 'root';
$password = 'kaspastinski';
$database = 'findit';

$connection = new mysqli($server, $user, $password, $database);

if ($connection->connect_error) {
    die('Database connection error: ' . $connection->connect_error);
}