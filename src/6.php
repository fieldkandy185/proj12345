<?php

function check_username($username) {
	$length = strlen($username);
	if ($length >= 8 && $length <= 16) {
		return true;
	} else {
		return false;
	}
}

function check_password($password) {
	$length = strlen($password);
	if ($length >= 12 && $length <= 32) {
		return true;
	} else {
		return false;
	}
}

function validate_form() {
	global $username, $password;
	$errors = array();

	if (!check_username($username)) {
		$errors[] = "Username must be between 8 and 16 characters long.";
	}

	if (!check_password($password)) {
		$errors[] = "Password must be between 12 and 32 characters long.";
	}

	if (empty($errors)) {
		return true;
	} else {
		return $errors;
	}
}

?>