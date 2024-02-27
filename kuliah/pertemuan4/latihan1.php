<?php
echo date("j/n/y");
echo "<br>";

echo date("l, j F o");
echo "<br>";

echo time();
echo "<br>";
echo date("F", time()+24*100*60*60);
echo "<br>";

echo mktime(0,0,0,2,27,2024);
echo "<br>";
echo date("l", mktime(0,0,0,5,16,2005));

echo "<br>";
echo date("l", strtotime("16 may 2005"));
echo "<br>";

?>