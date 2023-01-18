<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

/*if ($_POST["password"] !== $_POST["cpassword"]){
    die("Passwords must match"); 
}*/
    

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

print_r($_POST);
// var_dump($password_hash);

$mysqli = require __DIR__ . "/config.php";
$user_type = $_POST['user_type'];

$check_query = "SELECT * FROM user WHERE email = ?";
$stmt_check = $mysqli->prepare($check_query);
$stmt_check->bind_param("s", $_POST["email"]);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    die("email is already taken");
}

$sql = "INSERT INTO `user` (name, email, password, user_type)
        VALUES (?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash,
                  $user_type);
                  

if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} 