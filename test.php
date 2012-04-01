<?php
echo true ?: 'Hello';
echo false ?: 'World';

$items = array_fill(0, 100000, '12345678910');

echo '<br>';
$start = microtime();
reset($items);
foreach($items as $item)
{
   $x = $item;
}
echo microtime()-$start;

echo '<br>';
$start = microtime();
reset($items);
$i=0;
while($i<100000)
{
   $x = $items[$i];
   $i++;
}
echo microtime()-$start;


echo '<br>';
$start = microtime();
reset($items);
for($i=0; $i<100000; $i++)
{
   $j = $items[$i];
}
echo microtime()-$start;
echo '<br>';






function shutdown_function (&$test) {
    echo '<br>222  '.__FUNCTION__.'(): $test = '.$test."\n";
}

$test = 1;
register_shutdown_function('shutdown_function', &$test);
echo '<br>111 $test = '.$test."\n";

// do some stuff and change the variable values
$test = 2;

// now the shutdown function gets called
exit(0);
?>