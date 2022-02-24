<?php

function increaseEnthusiasm(string $str) 
{
    $str .= "!";
    return $str;
}

$str = "Hello World";
$k = increaseEnthusiasm($str);
echo $k, "\n<br>";

function repeatThreeTimes($str)
{
	for($i = 0; $i < 3; $i++) 
	{
        echo $str, " ";
    }
}
echo repeatThreeTimes($str), "\n<br>";