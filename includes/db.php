<?php
	
//$db_host='localhost';
//$db_user='root';
//$db_password='';


$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="cms";

foreach($db as $key => $value){
// defining constant. 
define(strtoupper($key), $value);	
}
// always need capital to make constant
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//if($connection){	
//echo "we are connected";
//
//}

?>