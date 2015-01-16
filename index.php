<?php

$pdo = new PDO('mysql:host=db', 'root', '');
$stmt = $pdo->prepare('SELECT NOW()');
$stmt->execute();

echo 'hello fig';
