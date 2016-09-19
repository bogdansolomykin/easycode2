<?php

$x = 10;
$x += --$x; // $x = $x + --$x; - получается, что справа от равно $x содержит такое же значение, как и --$x (9)? Это из-за того, что выражение обрабатывается справа? - Да
echo $x; // 18
echo "<br />\r\n";

$x = 10;
$x += $x--; // $x = $x + $x--;
echo $x; // 19 (9 + 10)
echo "<br />\r\n";

$a = 1;
++$a; // 2
$a *= $a; // $a = $a * $a;
echo $a--; // 4
echo "<br />\r\n";
echo $a; // 3
echo "<br /><br />\r\n";

$n = 3;
echo $n = $n + 1; // 4
echo "<br />\r\n";

$n = 3;
echo ++$n; // 4
echo "<br />\r\n";

$n = 3;
echo $n++; // 3
echo "<br />\r\n";
echo $n; // 4
// значит, аналог записи "echo $n = $n + 1;" - это "echo ++$n;", но не "echo $n++;"?

echo "<br /><br />\r\n";

$m = 3;
echo $m = $m - 1; // 2
echo "<br />\r\n";

$m = 3;
echo --$m; // 2
echo "<br />\r\n";

$m = 3;
echo $m--; // 3
echo "<br />\r\n";
echo $m; // 2

echo "<br /><br />\r\n";

echo '2' + "2" + 2;