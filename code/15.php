<?php

function printStringReturnNumber()
{
	echo "Hello World", "\n<br>";
	return 15;
}

$my_num = printStringReturnNumber();

echo $my_num;