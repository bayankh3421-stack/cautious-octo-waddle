<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/db.php';

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج زيارة ولي أمر</title>
</head>
<body>

<h2>نموذج زيارة ولي أمر</h2>

<form>
    <input placeholder="اسم ولي الأمر"><br><br>
    <input placeholder="اسم الطالب"><br><br>
    <input placeholder="رقم الهاتف"><br><br>
    <textarea placeholder="سبب الزيارة"></textarea><br><br>
    <button>إرسال</button>
</form>

</body>
</html>

