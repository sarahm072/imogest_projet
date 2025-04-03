<?php
$server = "localhost";  // استبدله بعنوان السيرفر إذا لزم الأمر
$username = "root";      // اسم المستخدم لقاعدة البيانات
$password = "";          // كلمة المرور لقاعدة البيانات
$database = "client"; // اسم قاعدة البيانات

$connect = new mysqli($server, $username, $password, $database);

if ($connect->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $connect->connect_error);
}
?>
