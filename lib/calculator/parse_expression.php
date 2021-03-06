<?php
require('calculator.php');
Class parse_expression
{
public $calculator;
public $stack = array();
public $expression = array();

public function __construct(){
	$this->calculator = new Calculator;
}

public function solve($exp = array())
	{	
	$result = 'Nothing to calc';
	if($this->validExpression($exp)) 
		{
		//echo 'inside the if statment';
		$this->expression = $exp;	
		foreach($this->expression as $current)
			{
			if ($this->calculator->isOperator($current))
				{	
				$val2 = array_pop($stack);
				$val1 = array_pop($stack);
				$this->calculator->setOperands(array($val1,$val2));
				$this->calculator->setOperation($current);
				$result = $this->calculator->process(); 	
				array_push($stack, $result);
				}
			else 
				{
				$stack[] = $current;
				}	
			}
		}
	return $result;	
	}

 public function validExpression($exp)
 	{
 	$result = false;
 	if (!empty($exp) && count($exp) > 1)
 		{
	 	$result = true;	
	 	}	
	//var_dump('the validation result is :' . $result);
	return $result;
 	}	 
}



