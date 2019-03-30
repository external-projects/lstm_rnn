<?php 

$data = $_POST["name"];
file_put_contents('input1.txt', $data);

$filehandle = fopen("story.txt",'w');
fwrite($filehandle, $data);
fclose($filehandle);


$output = shell_exec('php test.php');
header('Location: home.php'); 

?>