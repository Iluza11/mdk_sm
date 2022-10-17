<?php
function Calc(string $expressionStr): float
{
    $mathSymbols = ['+', '-', '*', '/','(',')'];
    $number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	

    $Array = str_split($expressionStr);

    foreach ($Array as $char)
    {
        if (!in_array($char, $mathSymbols) && !in_array($char, $number) || strpos($expressionStr, '/0'))
        {
            throw new Exception('Error!');
        }

    }

    return eval('return '.$expressionStr.';');
}

try
{
    echo ("Answer: ".Calc("(10+10)*12"));
} 
catch (Exception $e)
{
    echo $e->getMessage();
}
