<?php

$db_host = getenv('DB_HOST');
$pdo = new \PDO("mysql:host=$db_host;dbname=test", 'root', 'sql_root_pass');

while (true) {
    $pdo->beginTransaction();
    $st = $pdo->query('SELECT id FROM async_events ORDER BY id FOR UPDATE SKIP LOCKED');
    $pdo->commit();
    sleep(1);
}
