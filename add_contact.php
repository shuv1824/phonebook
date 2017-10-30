<?php 
include "core/init.php";

// Create DB object
$db = new Database;

// Run query
$db->query("INSERT INTO contacts (first_name,last_name,email,phone,company,designation,notes) 
			VALUES (:first_name,:last_name,:email,:phone,:company,:designation,:notes)");

// Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':company', $_POST['company']);
$db->bind(':designation', $_POST['designation']);
$db->bind(':notes', $_POST['notes']);

if($db->execute()){
	echo "Contact was added";
}else{
	echo "Could not add contact";
}