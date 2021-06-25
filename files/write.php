<?php

$file = fopen("file.txt", "w");
$message = "Hello world\n";
fwrite($file, $message);
$message2 = "Hello world2";
fwrite($file, $message2);
fclose($file);

echo "Done writing your file";