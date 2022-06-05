<?php
session_start();  
include('../../../connection.php');  
$username = $_POST['user'];  
$password = $_POST['pass'];
$email = $_POST['email'];
$discord = $_POST['discord'];


$username1 = stripcslashes($username);  
$password1 = stripcslashes($password);
$email1 = stripcslashes($email);  
$discord1 = stripcslashes($discord);  
$username2 = mysqli_real_escape_string($con, $username1);  
$password2 = mysqli_real_escape_string($con, $password1);
$email2 = mysqli_real_escape_string($con, $email1);  
$discord2 = mysqli_real_escape_string($con, $discord1);    

$sql = $con->prepare("SELECT *FROM user WHERE email = ?");
$sql->bind_param('s', $email2);
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();

if ($result->num_rows != 0) {
    echo "Email is already used";
} else {
$hashed = password_hash($password, PASSWORD_ARGON2ID);
$discount = "0";
$stmt = $con->prepare("INSERT INTO user (`email`, `password`, `discount`, `discordname`, `username`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('sssss', $email2, $hashed, $discount, $discord2, $username2);
$stmt->execute();
echo "Account was sucessfully created";
header('Location: /account/login.php');
}

?>