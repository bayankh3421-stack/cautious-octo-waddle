<?php

$conn = pg_connect(
    "host=db.bxcnoiolbrxulbqgozpm.supabase.co
     port=5432
     dbname=postgres
     user=postgres
     password=Bb?0792017997
     sslmode=require"
);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}
