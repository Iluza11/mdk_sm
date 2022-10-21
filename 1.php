<?php
function calc(string $expressionStr): float
{
    $mathSymbols = ['+', '-', '*', '/','(',')'];
    $number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	

    $array = str_split($expressionStr);

    foreach ($array as $char)
    {
        if (!in_array($char, $mathSymbols) && !in_array($char, $number) || strpos($expressionStr, '/0'))
        {
            throw new exception('Error!');
        }

    }

    return eval('return '.$expressionStr.';');
}

try
{
    echo ("Answer: ".calc("(10+10)*12"));
} 
catch (exception $e)
{
    echo $e->getMessage();
}
