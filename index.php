<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = [
        "parent_name"  => $_POST["parent_name"] ?? "",
        "student_name" => $_POST["student_name"] ?? "",
        "phone"        => $_POST["phone"] ?? "",
        "reason"       => $_POST["reason"] ?? ""
    ];

    $ch = curl_init("https://bxcnoiolbrxulbqgozpm.supabase.co/rest/v1/parent_visits");

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            "apikey: https://bxcnoiolbrxulbqgozpm.supabase.co",
            "Authorization: Bearer PUT_ANON_PUBLIC_KEY_HERE",
            "Content-Type: application/json",
            "Prefer: return=minimal"
        ],
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_RETURNTRANSFER => true
    ]);

    curl_exec($ch);
    curl_close($ch);

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
