<?php
$a = $_GET["a"];
$b = $_GET["b"];
$f = $_GET["op"];
if ($f == 'add') { 
    $op = $a + $b;
    $c="+";
}
elseif ($f == 'mul') { 
    $op = $a * $b;
    $c="*";
}
elseif ($f == 'div') { 
if ($b == "0")
print 'ERROR';
}
elseif ($f == 'div'){
    $op = $a / $b;
    $c="/";
}
elseif ($f == 'sub') {
    $op = $a - $b;
    $c="-";
}
echo "$a $c $b = $op";
?>
