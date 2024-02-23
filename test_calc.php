<?php
require('lib/calculator/parse_expression.php');
$calculator = new parse_expression;

$equation = array_slice($argv, 1);

$result = $calculator->solve($equation);

print_r($result);
echo "\n";

/*
//$expression = array ('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ); //(should == 18)
//$expression = array('3', '11', '+' , '5', '-'); //(should == 9)
//$result = $calculator->solve($expression);
//print_r($result);
//echo "\n";
*/
//echo "<br>";
// array ('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ); (should == 18)

//$result = $calculator->solve(array('2' , '3' , '11' , '+' ,'5' ,'-' , '*' ));
//var_dump($result);

//echo '<br>';