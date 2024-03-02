# RPN Calc_app

RPN Calc_app is a PHP utility designed to solve equations using Reverse Polish Notation (RPN). RPN, also known as postfix notation, is a mathematical notation wherein every operator follows all of its operands. It does not need any parentheses as long as each operator has a fixed number of operands. This utility offers an efficient way to evaluate expressions in a format different from the conventional algebraic notation.

## Introduction to RPN

In Reverse Polish Notation, the operators follow their operands. For example:

- `3 4 +` adds 3 and 4 together.
- `3 4 - 5 +` subtracts 4 from 3, then adds 5 to the result.

### More Examples

- An algebraic expression like `a × (b + c)` is written as `a b c + ×` in RPN.
- Thus, a modern formula like `3 * (2 + 2) = 12` in RPN looks like `3 2 2 + * = 12`.

## Installation

Clone this repository to your local machine to get started with RPN Calc_app. Ensure you have PHP installed on your system.

```bash
git clone https://github.com/jamdlaw/calc_app.git
cd calc_app
```

## Requirements

- PHP 7.4 or higher.

Ensure PHP is installed and correctly set up on your system to use the RPN Calc_app.

## Usage

To calculate an equation using RPN Calc_app, run the command in your terminal as follows:

```bash
php ./test_calc.php "3 2 2 + '*'"
