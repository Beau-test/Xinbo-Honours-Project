<?php

$file_dir = "/var/www/html/phpweb/temp_files/";
$file_name = $_COOKIE["fileName"];

$command = "flawfinder " . $file_dir . $file_name;

//echo "$command";

$output = shell_exec($command);
//echo "2";
echo "<pre>$output</pre>";
//echo "3";


?>