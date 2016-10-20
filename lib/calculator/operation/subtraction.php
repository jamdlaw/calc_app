<?php

class subtraction implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
        $result= array_shift($operands);
        foreach($operands as $k=>$operand)
        	{
        	//print_r($operand);
        	$result = $result - $operand;   	
        	}
    return $result ;
    }
}