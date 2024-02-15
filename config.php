<?php 

$hostname = 'localhost';
$username = 'u287526217_ak_personal';
$password = '*|SOan*0bX';
$dbname = 'u287526217_akriti_db';


// $hostname ='localhost';
// $username = 'root';
// $password = 'Admin1234#@';
// $dbname = 'intern';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if($config)
{
	echo "";
}
else
{
	echo "Connection Failed with Error:". mysqli_connect_error();
}


?>