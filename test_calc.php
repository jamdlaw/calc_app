<?php
require('lib/calculator/parse_expression.php');
//$expression = array ('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ); (should == 18)
//$expression = array('3', '11', '+' , '5', '-'); (should == 9)
$calculator = new parse_expression;
//$calculator->loadExpression(array('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ));
$result = $calculator->solve(array('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ));

var_dump($result);
