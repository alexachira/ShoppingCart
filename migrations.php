<?php
require_once "connect.php";
$users_table_sql = "CREATE TABLE IF NOT EXISTS users(id SERIAL, fullname TINYTEXT, email VARCHAR(255) UNIQUE NOT NULL,password TINYTEXT, is_admin BOOLEAN DEFAULT 0,last_updated TIMESTAMP)";
$DBH->exec($users_table_sql);
echo "Created users table\n";
?>