<?php 
include "core/init.php";

// Create DB object
$db = new Database;

// Run query
$db->query("DELETE FROM `contacts` WHERE id = :id");

// Bind Values
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact deleted successfully";
}else{
	echo "Could not delete contact";
}