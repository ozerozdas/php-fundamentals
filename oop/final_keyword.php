<?php

final class BaseClass
{
    public function hello()
    {
        echo "Hello from BaseClass";
    }
}

/*
// The following will cause an error
class DerivedClass extends BaseClass {

}
*/

$base = new BaseClass();
$base->hello(); // Outputs: Hello from BaseClass
