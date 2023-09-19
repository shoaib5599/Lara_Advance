<?php

// app/Services/MyConcreteClass.php

namespace App\Services;

use App\Contracts\MyInterface;

class MyConcreteClass implements MyInterface
{
    public function someMethod()
    {
        // Implement the logic for the 'someMethod' here.
        return 'Here we can cover Service Provider and Service Container!';
    }
}
