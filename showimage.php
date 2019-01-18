<?php
$filedir = "images/";
$file = $filedir.$_GET["file"];
if (!file_exists($file))
{
    header("HTTP/1.0 404 Not Found");
    die();
}
//Only allow jpg/png/gif/bmp.
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);