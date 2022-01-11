<?php
include "../classes/User.php";

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];

$user = new User;
$user->updateUser($id, $first_name, $last_name, $username);


?>