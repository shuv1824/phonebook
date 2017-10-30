<?php 
include "core/init.php";

// Create DB object
$db = new Database;

// Run query
$db->query("UPDATE `contacts` SET 
				first_name	= :first_name,
				last_name	= :last_name,
				email		= :email,
				phone		= :phone,
				company		= :company,
				designation	= :designation,
				notes		= :notes
		WHERE 	id 			= :id" );

// Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':company', $_POST['company']);
$db->bind(':designation', $_POST['designation']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact updated successfully";
}else{
	echo "Could not update contact";
}