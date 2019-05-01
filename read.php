<?php

$data = $_POST["predictions"];
$filehandle = fopen("predictions.txt",'w');

fwrite($filehandle, $data);
fclose($filehandle);

$output = shell_exec('php test1.php');
header('Location: home.php');

?>
