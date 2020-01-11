<?php
$start_pos = intval($_GET['sp']) ?: 0;
$step = 10;
$fl= scandir('..');
$fc= sizeof($fl);

for ($i=start_pos;$i<$start_pos+$step;$i++) echo($fl[$i]."<br/>");

?>
