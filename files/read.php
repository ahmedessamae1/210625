<?php

$file = fopen("files/mobiles.txt", "r") or die("Can't find the file!");
$value = fread($file, filesize("file.txt"));
fclose($file);
echo $value;
