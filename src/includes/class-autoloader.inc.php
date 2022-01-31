<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "../models/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    include_once $fullPath;
}