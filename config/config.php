<?php 

$db = new mysqli('localhost','root','','rentresident');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>