<?php
// เริ่มต้น session
session_start();

// ตั้งค่าตัวแปร session
$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john@example.com';

// เข้าถึงค่าใน session
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// แสดงผลค่าใน session
echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";

if (true) {
    header("Location: https://www.google.com");
}
// ปิด session
session_destroy();
?>