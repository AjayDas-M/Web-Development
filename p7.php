<?php
	$connect = new mysqli("localhost","root","","product");
    if($connect->connect_error)
    {
        die('Connection failed'.$connect->connect_error);
    }
    $db = "CREATE DATABASE product";
    if($connect->query($db)==TRUE)
    {
        echo "DATABASE CREATED SUCCESSFULLY with name s1mca";

    }
    else
    {
        echo "ERROR While creating database".$connect->error;
    }
?>