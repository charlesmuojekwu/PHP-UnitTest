<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item;
        
        $this->assertNotEmpty($item->getDescription());                    
    }
    
    public function testIDisAnInteger()
    {
        $item = new ItemChild;
        
        $this->assertIsInt($item->getID());
    } 
    
    ## could not access private method another test written in ItemReflectionTest
    
    // public function testTokenisAString()
    // {
    //     $item = new ItemChild;
        
    //     $this->assertIsInt($item->getToken());
    // }
}
