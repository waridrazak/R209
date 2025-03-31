<?php

include 'index.php';

$amount = $_POST['amount'];
$currency = $_POST['currency'];
$rate = $euro[$currency];
$converted = $amount * $rate;
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCela fait $converted €</p>";
