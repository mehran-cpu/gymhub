<?php
session_start(); // شروع سشن

// پاک کردن تمام داده‌های سشن
$_SESSION = array();
session_destroy();

// هدایت به صفحه ورود
header("Location: login.php"); // اگر صفحه ورودت اسمش چیز دیگه‌ایه، اون رو تغییر بده.
exit();
?>
