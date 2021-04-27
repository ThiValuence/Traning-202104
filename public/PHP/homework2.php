<?php
function factorialOfNumber($n)
{
if($n <= 1)
    	{
		return 1;
    	}
    else
    	{
		return $n * factorialOfNumber($n - 1);
    	}
}
	echo '<br>'. 'The factorial of the number 10 is '. factorialOfNumber(10);
?>