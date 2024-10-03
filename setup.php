<?php
define('ENCRYPTION_KEY', '4a7d1ed414474e4033ac29ccb8653d9d476af3b89f7bfb6e89ef54b3e94d1dcb');
define('ENCRYPTION_IV', '9f86d081884c7d659a2feaa0c55ad015');
include "includes/dbconfig.php";

// Attempt to connect to the database
$conn = mysqli_connect($server, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

function encryptData($data)
{
    $key = hash('sha256', ENCRYPTION_KEY, true);
    $iv = substr(hash('sha256', ENCRYPTION_IV), 0, 16);
    $encryptedData = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    return base64_encode($encryptedData);
}

// Create `users` and `entries` tables
$table_queries = [
    // Create users table
    "CREATE TABLE IF NOT EXISTS admin (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        my_key VARCHAR(255) NOT NULL,
        my_value longtext NOT NULL
    )",

    // Create entries table
    "CREATE TABLE IF NOT EXISTS contact (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        phone VARCHAR(255) NOT NULL,
        message longtext NOT NULL
    )"
];

// Execute table creation queries
foreach ($table_queries as $query) {
    if (!$conn->query($query)) {
        die("Error creating table: " . $conn->error);
    }
}

// Insert a default admin user if it doesn't exist
$default_admin_name = "Administrator";
$default_admin_username = "login";
$default_admin_password = encryptData("admin");
$default_admin_profile_image = "admin_profile_default.webp";

$stmt = $conn->prepare("INSERT IGNORE INTO admin (id, my_value) VALUES ('1', 'login, '{username:admin,password:admin}')");
// $stmt->bind_param("", $default_admin_name, $default_admin_username, $default_admin_password, $default_admin_profile_image);
$stmt->execute();

// Close the connection
$stmt->close();
$conn->close();

// Optionally, delete the setup script after setup
// if (file_exists(__FILE__)) {
//     unlink(__FILE__);
// }

// Redirect to homepage after setup
header("Location: /");
exit;
