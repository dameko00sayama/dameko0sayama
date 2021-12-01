<?php

$time = strtotime('+1 day');

$day = date('n/j(D',$time);
echo $day."\n";

?>