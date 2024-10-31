<?php
$int1 = 28;    # => 28
$int2 = -32;   # => -32
$int3 = 012;   # => 10 (octal)
$int4 = 0x0F;  # => 15 (hex)
$int5 = 0b101; # => 5  (binary)
$int6 = 2_000_100_000;

echo "$int1<br>";
echo "$int2<br>";
echo "$int3<br>";
echo "$int4<br>";
echo "$int5<br>";
echo "$int6<br>";
echo 1 + "-1.3e3";
?>