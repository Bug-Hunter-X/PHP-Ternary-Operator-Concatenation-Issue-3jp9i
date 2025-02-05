The corrected code utilizes string concatenation outside of the ternary operator to ensure proper variable interpolation:

```php
<?php
$name = 'John';
$age = 30;
$greeting = ($name == 'John' ? "$name" : 'Guest');
echo "Your name is: " . $greeting . " and your age is: " . $age;
?>
```

Alternatively, you can use double quotes and curly braces for variable interpolation within the ternary operator, but this can be less readable for complex expressions:

```php
<?php
$name = 'John';
$age = 30;
echo "Your name is: " . ($name == 'John' ? "{$name}" : 'Guest') . " and your age is: ".$age;
?>
```

This ensures that the variable `$name` is correctly interpolated regardless of whether the condition is true or false.