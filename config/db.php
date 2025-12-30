<?php
$host = "db.bxcnoiolbrxulbqgozpm.supabase.co";
$db   = "postgres";
$user = "postgres";
$pass = "Bb?0792017997";
$port = "5432";

$conn = pg_connect("
    host=$host
    dbname=$db
    user=$user
    password=$pass
    port=$port
");

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}
