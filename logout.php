<?php
header('Access-Control-Allow-Origin: http://localhost:5173'); // Your React app URL
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
echo json_encode(['message' => 'Logged out successfully']);
?>
