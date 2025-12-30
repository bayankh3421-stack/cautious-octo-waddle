<?php

$host = "aws-0-us-east-1.pooler.supabase.com";
$port = "5432";
$dbname = "postgres";
$user = "postgres.bxcnoiolbrxulbqgozpm";
$pass = "Bb?0792017997";

$conn = pg_connect("
    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$pass
    sslmode=require
");

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}
