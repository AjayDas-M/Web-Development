<?php
	$connect = new mysqli("localhost","root","");
    if($connect->connect_error)
    {
        die('Connection failed'.$connect->connect_error);
    }
    $db = "CREATE DATABASE product";
    if($connect->query($db)==TRUE)
    {
        echo "DATABASE CREATED SUCCESSFULLY with name product";

    }
    else
    {
        echo "ERROR While creating database".$connect->error;
    }
?>