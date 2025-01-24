In PHP, a common yet subtle error arises when dealing with object references and assignment.  Consider this example:

```php
class MyClass {
    public $value = 10;
}

$object1 = new MyClass();
$object2 = $object1; // Assignment, not copying
$object2->value = 20;

echo $object1->value; // Outputs 20, not 10
```

The issue is that `$object2 = $object1;` doesn't create a copy of `$object1`. Instead, `$object2` now points to the *same* object as `$object1`.  Modifying `$object2` directly affects `$object1`, which can lead to unexpected behavior and hard-to-debug problems, especially in larger applications.