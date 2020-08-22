<?php
require ('Database.php');
$db = new Database();

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];


if(empty($username) || empty($password) || empty($repassword)) {
    echo "Empty Username, Password or Retype Password!";
}
else if($password != $repassword) {
    echo "Passworrd and Retpye Password doesnt match!";
}
else {
			$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
			$res = $db->execute($sql);
			if($res) {
			echo "Successfully Created! {$username} was added <a href='../client/login.html'> login</a> ";
    }
       }
?>