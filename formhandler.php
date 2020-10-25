<?php

//Get data from contact form
$name = $_POST["name"] . "\n";
$email = $_POST["email"] . "\n";
$message = $_POST["message"] . "\n";
fopen("Messages.txt", "w");
fwrite("Messages.txt", $name);
fclose("Messages.txt")
?>
