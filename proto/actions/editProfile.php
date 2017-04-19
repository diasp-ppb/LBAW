<?php
include_once('../config/init.php');
include_once("../database/email.php");

if(isset($_POST['name'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$location = $_POST['location'];
	$newEmails = array_filter(array_map('trim', $_POST['email']));
	$links = array_map('trim', $_POST['link']);

	$oldEmails = getUserEmailList($id);
	$toDelete = array();

	foreach ($oldEmails as $email) {
		// if the email already exists, delete from newEmails array
		if(($key = array_search($email['mail'], $newEmails)) !== false) {
	    	unset($newEmails[$key]);
		} else {
			// if the email doesn't exists in the newEmails array, delete it
			array_push($toDelete, $email['id']);
		}
	}

	foreach ($toDelete as $deleteId) {
		deleteEmail($deleteId);
	}

	updateProfile($id, $name, $location, $links);
}
?>
