<?php
// ورود به سیستم
include 'header.php';

$name = $_POST["name"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "", "gymhubdatabase");
$result = mysqli_query($link, "SELECT * FROM `register_login` WHERE `username`='$name' AND `password`='$password'");
$row = mysqli_fetch_array($result);
mysqli_close($link);

if ($row) {
    
     echo "<div class='success-message'>خوش آمدید، ورود موفقیت‌آمیز بود!</div>";
} else {
    echo "<div class='error-message'>نام کاربری یا رمز عبور اشتباه است!</div>";
}

include 'footer.php';

?>