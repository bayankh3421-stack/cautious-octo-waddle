<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $parent  = $_POST['parent_name'] ?? '';
    $student = $_POST['student_name'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $reason  = $_POST['reason'] ?? '';

    $query = "INSERT INTO parent_visits 
        (parent_name, student_name, phone, reason)
        VALUES ($1, $2, $3, $4)";

    $result = pg_query_params($conn, $query, [$parent, $student, $phone, $reason]);

    if (!$result) {
        die("خطأ في الإدخال: " . pg_last_error($conn));
    }

    $success = true;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج زيارة ولي أمر</title>
</head>
<body>

<h2>نموذج زيارة ولي أمر</h2>

<?php if (!empty($success)): ?>
<p style="color:green;">تم حفظ الزيارة بنجاح ✅</p>
<?php endif; ?>

<form method="post">
    <input name="parent_name" placeholder="اسم ولي الأمر" required><br><br>
    <input name="student_name" placeholder="اسم الطالب" required><br><br>
    <input name="phone" placeholder="رقم الهاتف" required><br><br>
    <textarea name="reason" placeholder="سبب الزيارة" required></textarea><br><br>
    <button type="submit">إرسال</button>
</form>

</body>
</html>
