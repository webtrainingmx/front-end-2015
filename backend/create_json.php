<?php
header("Content-Type: application/json");

$fname = "../data/sample.json";
$file = fopen($fname, "r") or die("Unable to open file!");
echo fread($file, filesize($fname));
fclose($file);