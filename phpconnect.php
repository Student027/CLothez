<?php
/*
$dbserver="localhost";
$dbuser="root";
$dbpassword="abcd1234";
$dbname="clothez";

$sql = "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'abcd1234'";

$conn=mysqli_connect($sql);


if($conn==false){
    die("Connection error:".mysqli_connect_error($conn));
}
*/
$conn=mysqli_connect("localhost","root","abcd1234");
mysqli_select_db($conn,"clothez");

if (!$conn){
    die("Connection error:".mysqli_connect_error($conn));
}
else{

}


?>
