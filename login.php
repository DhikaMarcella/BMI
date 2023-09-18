<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "bmi");

if (isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM data_bmi WHERE username = '$username' && password = '$password'";

$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) === 1) { 
    $_SESSION['username'] = $username;
	header('Location: BMI.php');
    exit;
} else {
    header('Location: login_bmi.html');
    exit;
}
}
?>