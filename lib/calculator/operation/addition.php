<?php

class addition implements OperationInterface
{	
    public function evaluate(array $operands = array())
    {
        return array_sum($operands);
    }
}