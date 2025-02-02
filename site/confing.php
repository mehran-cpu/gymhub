<?php
// ثبت‌نام
include 'header.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "", "gymhubdatabase");
$result = mysqli_query($link, "INSERT INTO `register_login` (`username`, `email`, `password`) VALUES ('$name', '$email', '$password');");
mysqli_close($link);

if ($result) {
    echo "<div class='success-message'>ثبت‌نام با موفقیت انجام شد! خوش آمدید.</div>";
} else {
    echo "<div class='error-message'>مشکلی در ثبت‌نام پیش آمد. لطفاً دوباره تلاش کنید.</div>";
}

include 'footer.php';
?>
