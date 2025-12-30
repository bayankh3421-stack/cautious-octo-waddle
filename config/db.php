<?php

$conn = pg_connect(
    "host=aws-0-us-east-1.pooler.supabase.com
     port=6543
     dbname=postgres
     user=postgres.bxcnoiolbrxulbqgozpm
     password=Bb?0792017997
     sslmode=require"
);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}
