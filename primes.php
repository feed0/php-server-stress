<?php
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$max = isset($_GET['n']) ? (int)$_GET['n'] : 0;
$primes = [];

for ($i = 2; $i <= $max; $i++) {
    if (isPrime($i)) $primes[] = $i;
}

echo implode(', ', $primes);
?>