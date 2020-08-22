<?php
require("Database.php");
$db = new Database();

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$db = new Database();
$num_rows = mysqli_num_rows($db->execute($sql));

if($num_rows > 0){
    echo "success from server!";
} else {
    echo "login failed!";
}
?>
