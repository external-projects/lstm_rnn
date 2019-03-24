<?php 

$output = shell_exec('php test1.php') or die("failed to run");
header('Location: page.html');

?>