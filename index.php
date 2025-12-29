<?php
session_start();
include("config/db.php");

if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit;
}

$students = $mysqli->query("SELECT COUNT(*) AS total FROM students")->fetch_assoc();
$users    = $mysqli->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc();
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<title>لوحة التحكم</title>
<link rel="stylesheet" href="/school/assets/style.css">
<style>
.cards{display:flex;gap:20px;margin-top:20px}
.card{
    flex:1;
    background:#fff;
    padding:25px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 2px 10px rgba(0,0,0,.1)
}
.card h1{font-size:42px;color:#2a5298;margin:0}
</style>
</head>
<body>

<header>
    لوحة التحكم
    <a href="auth/logout.php">خروج</a>
</header>

<div class="container">

<?php include("includes/menu.php"); ?>


<main>

<h2>مرحبًا بك في نظام المدرسة</h2>

<div class="cards">
    <div class="card">
        <h1><?php echo $students['total']; ?></h1>
        <p>عدد الطلاب</p>
    </div>

    <div class="card">
        <h1><?php echo $users['total']; ?></h1>
        <p>عدد المستخدمين</p>
    </div>
</div>

</main>
</div>

</body>
</html>
