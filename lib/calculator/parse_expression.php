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

public function solve($exp = array()){	
	if(!$this->validExpression($exp)){
		return 'Nothing to calculate';
	}
	$this->expression = $exp;
	foreach($this->expression as $current){
		print_r('evaulating this value:' . $current);
		echo "\n";
		//if current value is a number add it to the stack
		if(!$this->calculator->isOperator($current)){
			print_r('it is a number so add it to the stack');
			echo "\n";
			$stack[] = $current;	
		}	
		else{	
			$val2 = array_pop($stack);
			$val1 = array_pop($stack);
			$this->calculator->setOperands(array($val1,$val2));
			$this->calculator->setOperation($current);
			$result = $this->calculator->process(); 	
			array_push($stack, $result);
			print_r('stack is now:');
			echo "\n";
			print_r($stack);
			echo "\n";

		}
			
	}
		
	return $result;	
	}

 //checks if espession is a valid RPN
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



