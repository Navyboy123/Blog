<?php
require_once ("../model/Database.php");

$connection =new mysqli($host,$username,$password);

if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
    
}
        $exsists = $connection->select_db($database);
else {
    echo"Success" . $connection->host_;
}

