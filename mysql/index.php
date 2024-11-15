<?php 
echo " welcome to connected to a database <br>";

//ways to connect a mysql database
/*
1. mysqli extensionn :- 1.procedural :- direct functions 2. object oriented :- classes and object
2. PDO :- php data objects; multiple database can be integrated
*/

//connecting to the database
//1
$servername= "localhost";
$username = "root";
$password ="";
// $password ="abc";//action denied
//creating a connection
$conn = mysqli_connect($servername, $username , $password);

//die if connection was not successfull
if(!$conn){
    die("connection to the database failed: " .mysqli_connect_error());
}
echo "connection is successful <br>"


?>