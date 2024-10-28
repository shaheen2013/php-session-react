<?php
header('Access-Control-Allow-Origin: http://localhost:5173'); // Your React app URL
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');


session_start();



// Dummy user data for demonstration
$validUsername = 'user';
$validPassword = 'pass';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit; // Exit for preflight requests
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials (replace this with your actual validation)
    if ($username === $validUsername && $password === $validPassword) {
        // Store user information in the session
        $_SESSION['user_id'] = $username; // Storing username for simplicity
        echo json_encode(['message' => 'Login successful']);
    } else {
        echo json_encode(['error' => 'Invalid credentials']);
    }
}
?>
