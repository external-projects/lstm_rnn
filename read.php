<?php 

$output = shell_exec('php test1.php') or die("failed running php");
header('Location: page.html');

?>
