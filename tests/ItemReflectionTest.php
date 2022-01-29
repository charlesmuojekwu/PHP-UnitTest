<?php

use PHPUnit\Framework\TestCase;

/// using php reflection api to access private method for test

class ItemReflectionTest extends TestCase
{ 
    public function testTokenIsAString()
    {
        $item = new Item;

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $item = new Item;

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($item,['example']);

        $this->assertStringStartsWith('example', $result);
    }
    
}