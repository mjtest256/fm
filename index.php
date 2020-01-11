<?php
$fl= scandir('.');
$fc= sizeof($fl);
for ($i=0;$i<$fc;$i++) echo($fl[$i]."<br/>");

?>
