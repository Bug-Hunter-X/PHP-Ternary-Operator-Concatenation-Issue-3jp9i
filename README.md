# PHP Ternary Operator Concatenation Issue

This repository demonstrates a common error in PHP related to using the ternary operator within an echo statement.  The problem arises when attempting to concatenate strings and variables within the ternary expression, leading to unexpected results or parse errors.  The `bug.php` file contains the erroneous code, and the `bugSolution.php` provides a corrected version.

## Problem

Incorrect variable interpolation within a ternary expression used in an echo statement leads to issues.

## Solution

Properly handling string concatenation and variable interpolation in the ternary expression, ensuring the variables are interpolated correctly.