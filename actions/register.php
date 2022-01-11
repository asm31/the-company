<?php

include "../classes/User.php";

// Collect all athe data from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

// Create an object
$user = new User;

// Call the method
$user->createUser($first_name, $last_name, $username, $password);

?>