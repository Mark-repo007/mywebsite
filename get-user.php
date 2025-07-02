<?php
// Simulate a database of users
$users = [
    1 => ["id" => 1, "name" => "Mark", "email" => "mark@example.com"],
    2 => ["id" => 2, "name" => "Sarah", "email" => "sarah@example.com"]
];

// Get user ID from query string
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Set headers
header('Content-Type: application/json');

// Return user data or error
if (array_key_exists($id, $users)) {
    echo json_encode(["status" => "success", "data" => $users[$id]]);
} else {
    echo json_encode(["status" => "error", "message" => "User not found"]);
}
