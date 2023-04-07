<?php

// echo "The current path is: " . __FILE__;return; // to find the current location

$envFile = 'webpage/folder1/folder2/.env'; //to decalre the location of the file
$envVars = file_exists($envFile) ? parse_ini_file($envFile) : null;
