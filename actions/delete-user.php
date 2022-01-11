<?php
include "../classes/User.php";

$id = $_POST['id'];

$user = new User;

$user->deleteUser($id);

?>