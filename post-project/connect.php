<?php
$host='localhost';
$user='root';
$pass='Root@1234!@#$';
$db='diary';

$conn=mysqli_connect($host,$user,$pass,$db);

if(isset($conn)){
    echo "Connected";
}
else{
    echo "Not Connected";
}


?>