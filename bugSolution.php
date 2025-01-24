To avoid this issue, use the `clone` keyword to create a copy of the object:

```php
class MyClass {
    public $value = 10;
}

$object1 = new MyClass();
$object2 = clone $object1; // Creates a copy
$object2->value = 20;

echo $object1->value; // Outputs 10
echo $object2->value; // Outputs 20
```

Cloning ensures that changes to `$object2` don't affect `$object1`, thereby preventing unexpected side effects.