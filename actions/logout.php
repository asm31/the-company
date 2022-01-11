<?php
session_start();
session_unset();  //Remove the values
session_destroy();  //Delete all session variables
header("location: ../views");  //Go to views/index.php

?>