<?php
// this class the pattern used was taken from here
//http://stackoverflow.com/questions/16059886/a-simplier-way-to-write-the-calculator-class-in-oop-php
require('OperationInterface.php');
require('operation/addition.php');
require('operation/subtraction.php');
require('operation/divison.php');
require('operation/multiplication.php');
require('operation/fractorial.php')
class Calculator
{
    protected $operands = array();
    protected $operator_array = array(  
                  'addition' => '+'
                 ,'subtraction'=> '-'   
                 ,'multiplication'=>'*'
                 ,'divison'=>'/' 
                );

    public function setOperands(array $operands = array())
    {
        $this->operands = $operands;
    }

    public function addOperand($operand)
    {
        $this->operands[] = $operand;
    }

    public function process()
    {
        return $this->operation->evaluate($this->operands);
    }

    public function isOperator($value)
    {
        if(in_array($value, $this->operator_array))
            {
            return true;
            }
        else
            {
            return false;    
            }
    }

    public function setOperation($operator)
    {
        $class = '';
        $class = array_search($operator , $this->operator_array);  
        if(empty($class))
            {
            return;    
            }
        $this->setOperationClass(new $class);
    }    

    /**
     * You need any operation that implement the given interface
     */
    private function setOperationClass(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

}