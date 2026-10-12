# PHP Form Practice Project

This project is a basic PHP learning exercise that demonstrates core PHP concepts and HTML form handling.

## Overview

The page includes examples of:

- PHP functions
- Parameters vs arguments
- Returning values from functions
- Factorial calculation
- Pass by value vs pass by reference
- Default parameter values
- Variable scope
- Textbox and password form handling
- Textarea handling
- Radio button selection

## File

- `weak_4.php` — main PHP file containing the code and form examples

## Requirements

- XAMPP or any local PHP server
- Apache enabled in XAMPP
- PHP 7 or newer

## How to Run

1. Save the project in your local PHP folder, for example:
   `C:\xampp\htdocs\PHP\home\User.PHP`
2. Start Apache from XAMPP
3. Open the file in the browser:
   `http://localhost/PHP/home/User.PHP/weak_4.php`

## Important Notes

- `$_POST` is used to receive data from forms
- `htmlspecialchars()` is used to prevent HTML injection
- Each form uses `method="post"`
- Radio buttons are checked using `$_POST["sex"]`

## Example Features Included

- Factorial output:
  `Factorial of 5 is: 120`
- Pass by value example
- Pass by reference example
- Simple greeting function
- User registration form examples

## Learning Purpose

This project is intended for beginners who want to understand:

- PHP function usage
- HTTP form submission
- Basic form validation
- User input handling in PHP
