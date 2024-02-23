<?php
require('lib/calculator/parse_expression.php');
$calculator = new parse_expression;

$equation = array_slice($argv, 1);
//print_r($equation);

$result = $calculator->solve($equation);

var_dump($result);

//$expression = array ('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ); (should == 18)
//$expression = array('3', '11', '+' , '5', '-'); (should == 9)

// array('3', '11', '+' , '5', '-'); (should == 9)

//$result = $calculator->solve(array('3', '11', '+' , '5', '-'));
//var_dump($result);

//echo "<br>";
// array ('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ); (should == 18)

//$result = $calculator->solve(array('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ));
//var_dump($result);

//echo '<br>';