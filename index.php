<?php

echo "<pre>";

$pdo = new PDO('mysql:host=db;port:3306;dbname=mysql;charset=utf8mb4', 'admin', 'plokijuh');
$stmt = $pdo->prepare('SELECT NOW()');
$stmt->execute();

while ($row = $stmt->fetch()) {
    var_dump($row);
    echo PHP_EOL;
}

echo PHP_EOL;
echo 'hello fig';
