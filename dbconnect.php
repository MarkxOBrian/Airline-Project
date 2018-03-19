<?php 
$user = 'root';
$host = 'localhost';
$passwd = '';
$dbName  ='airlinereservation';


// create the connection
$con = mysqli_connect($host, $user, $passwd);
// if ($con == true ) {
// 	# code...
// 	echo "connection established";
// }
// else{
// 	echo "No connection made";
// }

// the db connection
$db = mysqli_select_db($con, $dbName);
// if ($db == true) {
// 	# code...
// 	echo "Db connecton made";
// }
// else{
// 	echo "No db connection made";
// }


?>