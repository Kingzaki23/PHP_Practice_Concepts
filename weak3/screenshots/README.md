PHP Chapter 3: Arrays and Functions

Overview

This project demonstrates important PHP concepts related to arrays and functions.

The code covers:

* Multi-dimensional arrays
* Two-dimensional numerical indexed arrays
* foreach loops with arrays
* Array functions
* is_array()
* in_array()
* explode()
* shuffle()
* array_merge()
* array_reverse()
* array_push()
* array_pop()
* end()
* Introduction to functions
* Function definition
* Function parameters
* Function arguments
* Function calls

⸻

1. Multi-dimensional Arrays

A multidimensional array is an array that contains one or more arrays.

A two-dimensional array can be understood as an array of arrays. It is useful when information is organized into groups, rows, or columns.

In this project, the $student array contains several inner arrays. Each inner array represents one student and contains information such as:

* Student name
* Year
* District
* Phone number

A multidimensional array requires more than one index to access a specific value.

For example, the first index identifies the student row, while the second index identifies the value inside that student record.

⸻

2. Using foreach with a Multidimensional Array

The foreach loop is used to go through the elements of an array one at a time.

The project demonstrates two ways of processing the multidimensional student array.

The first loop accesses specific positions inside each inner array.

The second approach uses a nested foreach loop. The outer loop processes each student array, while the inner loop processes each value inside the student array.

Nested loops are useful when working with multidimensional arrays because each inner array must be processed separately.

⸻

Array Functions

PHP provides built-in functions that can be used to access and manipulate arrays.

These functions make it easier to work with array data.

⸻

3. is_array()

The is_array() function checks whether a variable is an array.

It returns a Boolean result:

* true if the variable is an array
* false if the variable is not an array

In the project, it is used to check the $info variable.

⸻

4. in_array()

The in_array() function checks whether a specific value exists inside an array.

It can be used when you need to determine whether an array contains a particular value.

The function returns:

* true when the value is found
* false when the value is not found

The project demonstrates this function with both the $info array and an inner array from the $student multidimensional array.

⸻

5. explode()

The explode() function converts a string into an array.

It uses a specified separator to divide the string into multiple parts.

In the project, a sentence is separated using a space as the separator. Each word becomes an element of the resulting array.

This is useful when a string contains multiple pieces of information that need to be handled as separate array elements.

⸻

6. shuffle()

The shuffle() function changes the order of elements in an array randomly.

After an array is shuffled, its elements can appear in a different order.

The project uses shuffle() after creating an array from a sentence with explode().

⸻

7. array_merge()

The array_merge() function combines two or more arrays into one array.

In the project, two arrays are merged into a new array.

This is useful when values from multiple arrays need to be combined into a single array.

⸻

8. array_reverse()

The array_reverse() function returns an array with its elements in reverse order.

For example, if an array contains elements in the order:

First → Second → Third

The reversed array becomes:

Third → Second → First

The original array is used to create a reversed array.

⸻

9. array_push()

The array_push() function adds one or more elements to the end of an array.

The project adds a new value to an existing numerical array.

This function is useful when new elements need to be added to the end of an array.

⸻

10. array_pop()

The array_pop() function removes the last element from an array.

The removed element is returned by the function.

The project demonstrates removing the last value from a numerical array.

⸻

11. end()

The end() function moves the internal pointer of an array to its last element and returns that element.

In the project, it is used to obtain the last element of an array.

⸻

Functions in PHP

12. Introduction to Functions

A function is a set of statements that performs a particular task.

Functions allow a section of code to be defined once and used whenever it is needed.

A function does not execute automatically when it is defined. It must be called.

Functions can also receive values as input and can perform operations using those values.

⸻

13. Defining a Function

A PHP function is defined using the function keyword.

A function definition contains:

* The function keyword
* A function name
* Parentheses
* Optional parameters
* A function body enclosed in curly braces

The function body contains the statements that are executed when the function is called.

⸻

14. Function Call

A function call is used to execute a function.

After a function has been defined, its name is written with parentheses to call it.

A function can be called multiple times.

In this project, the writeMsg function is defined and then called to execute its statements.

⸻

15. Function Parameters

A parameter is a variable defined inside the parentheses of a function definition.

Parameters allow a function to receive information when it is called.

The project contains a factorial function with one parameter.

The parameter represents the value that the function will work with.

⸻

16. Function Arguments

An argument is the actual value passed to a function when the function is called.

The project calls the factorial function with the value 5.

The value passed during the function call becomes the value of the function’s parameter.

Parameter vs Argument

Parameter: The variable defined in the function.

Argument: The actual value passed to the function.

⸻

17. Factorial Function

The project contains a function that calculates the factorial of a number.

The function:

1. Receives a number through a parameter.
2. Creates a result value.
3. Uses a for loop to calculate the factorial.
4. Displays the calculated result.

For example, the factorial of 5 is calculated as:

5 × 4 × 3 × 2 × 1 = 120

⸻

Key Concepts to Remember

Multi-dimensional Array

An array that contains other arrays.

foreach

A loop used to process array elements one at a time.

is_array()

Checks whether a variable is an array.

in_array()

Checks whether a value exists in an array.

explode()

Converts a string into an array.

shuffle()

Randomizes the order of array elements.

array_merge()

Combines arrays into one array.

array_reverse()

Reverses the order of an array.

array_push()

Adds an element to the end of an array.

array_pop()

Removes the last element of an array.

end()

Returns the last element of an array.

Function

A block of statements designed to perform a particular task.

Parameter

A variable that receives a value inside a function definition.

Argument

The actual value passed to a function when it is called.

Function Call

The action of executing a defined function.

⸻

Summary

This project demonstrates how PHP can be used to organize and process data with arrays and functions.

The array section focuses on multidimensional arrays and common built-in array functions.

The function section introduces functions, function definitions, function calls, parameters, arguments, and a practical factorial example.

These concepts provide the foundation for writing reusable and organized PHP programs.