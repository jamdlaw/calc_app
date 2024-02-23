<?php

class multiplication implements OperationInterface
{
    public function evaluate(array $operands = array())
    {
        //check that there are no zeros in the array and that there is more then 
        //one value in the array
        $result = array_shift($operands);
        foreach ($operands as $operand) 
            {
        	$result *= $operand;
        	}
    return $result;
    }
}
