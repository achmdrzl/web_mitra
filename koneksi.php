<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB', 'db_mitra');

// Buat Koneksinya
$conn = mysqli_connect(HOST, USER, PASS, DB);
// if (!$db) {
// die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>