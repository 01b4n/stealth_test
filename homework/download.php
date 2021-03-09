<?php

$filename = $_GET['files'];
$real_filename = urldecode($filename);
$fileDir = "data/";
$file_dir = "./".$fileDir."/".$real_filename;

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$real_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

?>

