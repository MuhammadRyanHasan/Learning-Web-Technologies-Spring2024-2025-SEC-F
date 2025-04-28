<?php
echo "<h2>1</h2>";
$l = 10;
$w = 5;
$a = $l * $w;
$p = 2 * ($l + $w);
echo "Area: $a<br>";
echo "Perimeter: $p<br>";

echo "<h2>2</h2>";
$pr = 200;
$v = 0.15 * $pr;
echo "Price: $pr<br>";
echo "VAT (15%): $v<br>";

echo "<h2>3</h2>";
$n = 7;
if ($n % 2 == 0) {
    echo "$n is Even<br>";
} else {
    echo "$n is Odd<br>";
}

echo "<h2>4</h2>";
$x = 12;
$y = 45;
$z = 23;
if ($x >= $y && $x >= $z) {
    echo "Largest number is: $x<br>";
} elseif ($y >= $x && $y >= $z) {
    echo "Largest number is: $y<br>";
} else {
    echo "Largest number is: $z<br>";
}

echo "<h2>5</h2>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br>";

echo "<h2>6</h2>";
$nums = [10, 20, 30, 40, 50];
$s = 30;
$f = false;
foreach ($nums as $num) {
    if ($num == $s) {
        $f = true;
        break;
    }
}
if ($f) {
    echo "$s is found in the array.<br>";
} else {
    echo "$s is not found in the array.<br>";
}

echo "<h2>7</h2>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

$c = 1;
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $c . " ";
        $c++;
    }
    echo "<br>";
    $c = 1;
}
echo "<br>";

$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
echo "<br>";
?>
