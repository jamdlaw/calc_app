<?php

class fractorial implements OperationInterface
{
	public function evaluate(array $operands = array())
		{
		if(count($operands) > 1)
			{
			return 'factorial can not be longer then 1';	
			}
		$result = $this->solve($operands[0]);
		return $result;
		}
	public function solve($operand)
		{
		$result = 0;	
		$operand_array = array();
		$operand_array[] = $operand;
		$monkey = 0;
		while($operand != 1)
			{
			$operand = $operand - 1;
			$operand_array[] = $operand;
			$monkey += 1;
			}
		foreach($operand_array as $k=>$value)
			{
			
			echo $value;
			$result = $result == 0 ? $value : $value * $result; 
			//echo $result . " !<br>";
			
			}
		return $result;	
		}
}