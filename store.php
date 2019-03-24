<?php 

$data = $_POST["name"];
file_put_contents('input1.txt', $data);

$output = shell_exec('php test.php');
header('Location: page.html'); 

?>