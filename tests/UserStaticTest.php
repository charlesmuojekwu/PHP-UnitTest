<?php

use PHPUnit\Framework\TestCase;

//testing a class that has dependency on a static method

class UserStaticTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new UserStatic('dave@example.com');

        $user->setMailerCallable(function() {

            echo "Mocked";

            return true;
        });
        

        $this->assertTrue($user->notify('Hello!'));
    }    
}