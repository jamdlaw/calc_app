#RPN calc_app
a php utility to solve reverse polish notation equations.

##below are sample of how rpn is calculated
3 4 +: Adds 3 and 4 together
3 4 − 5 +: Subtracts 4 from 3, then adds 5 to the result
 
###more examples: 
 a × (b + c) is written a b c + ×
so modern formula looks like this
3 * (2 + 2) = 12
and RNP looks like this
3 2 2 + * = 12

###usage
php ./test_calc.php 3 2 2 + '*'
please make sure to wrap multi symbol in quotes. 
it becomes a "all files in this folder" oporator insteed of multiplication