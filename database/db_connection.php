<?php
$servername = "localhost";
$username = "root";
$password = ""; //xampp ไม่ต้องใส่ $password = "";
$dbname = "db_petchsamut"; //ชื่อจริงไม่มีเว้นวรรค
$port = "3306"; //port ในการเชื่อมต่อฐานข้อมูลส่วนใหญ่จะเป็น 3306
//ถ้าหากมีการเปลี่ยนจำเป็นต้องกำหนด port ในการเชื่อมต่อ

//create a new MySQLi connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

//Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    //
} 
// else {
//     echo "Connection successfully.";
//}