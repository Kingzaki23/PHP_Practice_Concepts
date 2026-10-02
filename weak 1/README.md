# PHP_Practice_Concepts
PHP Fundamentals & Control Structures
This repository serves as a concise guide to the fundamental concepts of PHP (Hypertext Preprocessor), covering variables, constants, output mechanisms, and conditional logic.

1. What is PHP?
PHP is a widely-used server-side scripting language designed primarily for web development. It allows developers to create dynamic content that interacts with databases, handles user input, and manages sessions.

2. Echo Statement
In PHP, echo is a statement used to output data to the screen. It can print strings, variables, or HTML directly to the browser.

Key characteristic: It does not require parentheses and can output multiple strings separated by commas.

3. Variables
A variable is a temporary container used to store data such as text, numbers, or arrays.

Syntax: Always starts with a dollar sign ($).

Mutability: The value stored inside a variable can change dynamically during the execution of the script.

4. Constants
A constant is an identifier for a simple value that cannot be altered or undefined during script execution.

Definition: Defined using the define() function or the const keyword.

Scope: Constants are automatically global across the entire script.

Control Structures
Conditional statements control the flow of execution in a program based on evaluating specific criteria as either true or false.

5. If Statement
Executes a single block of code only if a specified condition evaluates to true. If the condition is false, the code block is bypassed completely.

6. If-Else Statement
Provides a two-way branch. It executes the first code block if the condition is true, or an alternative (else) block if the condition evaluates to false.

7. If-Elseif-Else Statement
Allows you to chain multiple conditions sequentially. PHP checks conditions top to bottom:

As soon as a condition evaluates to true, its block executes and the rest are skipped.

If all preceding conditions are false, the final else block executes as a fallback.

8. Switch Statement
Evaluates a single expression against a list of possible matching values (called case blocks).

Efficiency: Useful when comparing the same variable against multiple discrete values, serving as a cleaner alternative to a long if-elseif chain.

Break Statement: Utilizes break keywords to prevent execution from "falling through" into subsequent cases.

Default Case: Provides a default block that executes if no cases match.
