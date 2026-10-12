# PHP Study Notes — Chapter 3 to Chapter 4

## Coverage
- **Chapter 3:** Parameters vs arguments, returning values, passing by value/reference, default argument values, variable scope, and including files.
- **Chapter 4:** HTML forms, `GET` vs `POST`, `$_POST`, text and password fields, textarea, and radio buttons.

## Chapter 3 — Functions
A **function** is a reusable block of code that performs a task. Define it with `function`, then call it by its name.

- **Parameter:** the placeholder variable in a function definition, such as `$number` in `function showNumber($number)`.
- **Argument:** the actual value passed to the function, such as `5` in `showNumber(5)`.
- **`return`:** sends a result back to the code that called the function.
- **Pass by value:** the function receives a copy, so changing the parameter does not change the original variable.
- **Pass by reference:** add `&` to the parameter to allow the function to change the original variable.
- **Default argument:** a parameter can have a default value, used when the caller does not provide an argument.
- **Local scope:** a variable declared inside a function is normally available only there.
- **Global scope:** a variable declared outside a function is outside that function; use `global $variable` or `$GLOBALS` to access it inside a function.
- **`include` / `require`:** insert another PHP file. `include` gives a warning if the file is missing and execution can continue; `require` stops with a fatal error. The `_once` forms prevent the same file from being included more than once.

## Chapter 4 — Forms through Radio Buttons
An **HTML form** collects user input and sends it to the server. A form normally has opening and closing `<form>` tags, a method (`GET` or `POST`), input controls, and optionally an `action` destination.

- **GET:** form values are visible in the URL; use it for non-sensitive query data.
- **POST:** sends values in the request body and is commonly used for registration forms.
- **`$_GET` / `$_POST`:** PHP superglobals used to retrieve submitted values by their control `name`.
- **Text field:** `<input type="text" name="name">`
- **Password field:** `<input type="password" name="pass">`
- **Textarea:** `<textarea name="comment"></textarea>` for multi-line input.
- **Radio buttons:** use the same `name` for a group and different `value` attributes; the user can select one option from that group.
- **`isset()` / `!empty()`:** help check whether submitted values exist or are non-empty before using them.
- **`htmlspecialchars()`:** helps display user input safely as text in HTML.

## Running the PHP file
1. Put `PHP_Chapter3_Functions_to_Chapter4_RadioButtons.php` inside your XAMPP `htdocs` folder.
2. Start Apache from the XAMPP Control Panel.
3. Open `http://localhost/PHP_Chapter3_Functions_to_Chapter4_RadioButtons.php`.
4. The file contains several separate form examples; submit each form to test it. For a cleaner lesson, you can copy one section at a time into its own PHP file.

**Important:** This is a study compilation based on the two uploaded lecture slide decks, with small safety and organization improvements for testing. It stops Chapter 4 at Radio Button Fields as requested.
