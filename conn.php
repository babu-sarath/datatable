<?php
$host='localhost';
$user='root';
$pass='';
$dbname='imms';

//Set the Data source name (DCN)
$dsn='mysql:host='.$host.';dbname='.$dbname;

//Create pdo instance
$con=new PDO($dsn, $user, $pass); //basically a connection string
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //setting the default type to fetch table data from DB, this is like array
$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


if(!$con){
    echo 'Error';
}