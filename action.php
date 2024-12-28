<?php

$pdo = require './db.php';

$a = (int)$_POST['a'];
$b = (int)$_POST['b'];
$sum = $a + $b;


$stmt = $pdo->prepare('INSERT INTO numbers (a, b, sum) VALUES (:a, :b, :sum)');
$stmt->execute(['a' => $a, 'b' => $b, 'sum' => $sum]);


echo "Сумма: " . $sum;
?>