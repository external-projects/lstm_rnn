<?php 

$storydata = file_get_contents('story.txt');
$predictdata = file_get_contents('jeffery.txt');

$data = $storydata." ".$predictdata;

$filehandle = fopen("story.txt",'w');
fwrite($filehandle, $data);
fclose($filehandle);

file_put_contents('input1.txt', $data);

$pred_output = shell_exec('php predict.php');
$output = shell_exec('php test.php');
header('Location: home.php');

?>