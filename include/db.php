<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'first_project');
    $mysql = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME );
    if ($mysql->connect_errno) exit('ERROR');
    $mysql->set_charset('utf8');
?>