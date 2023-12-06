<?php
$host = "127.0.0.1:3307"; //địa chỉ mysql server sẽ kết nối đến
$dbname="duan"; //tên database sẽ kết nối đến
$username = "root"; //username để kết nối đến database 
$password = ""; // mật khẩu để kết nối đến database
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);  // kết nối đến database. $conn gọi là đối tượng kết nối.