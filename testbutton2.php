<?php

session_start();

// Simulate some session data
$_SESSION['message'] = "User updated successfully";
$_SESSION['error'] = "User was not updated";

// Simulate user data
$userData = array(
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'message' => $_SESSION['message'],
    'error' => $_SESSION['error']
);

// Return JSON response
echo json_encode($userData);
