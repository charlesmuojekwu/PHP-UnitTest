<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    
    public function testReturnsFullname()
    {

        $user = new User();

        $user->first_name = "mikel";
        $user->surname = "tresa";

        $this->assertEquals('mikel tresa', $user->getFullName());
    }


    public function testFullNameIsEmptyByDefault()
    {
        $user = new User();

        $this->assertEquals('', $user->getFullName());
    }

    ///all method name must preceed with test or the below DocBlock commment of @test can be used instead

    /** 
     * @test 
    */
    
    public function UserHasFirstName()
    {
        $user = new User;

        $user->first_name = "teresa";

        $this->assertEquals('teresa', $user->first_name);

    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
                    ->method('sendMessage')
                    ->with($this->equalTo('mike@mail.com'), $this->equalTo('hello'))
                    ->willReturn(true);
        
        //$user->setMailer(new Mailer); // injecting  mailer class
        $user->setMailer($mock_mailer); // injecting mocked mailer class for test

        $user->email = 'mike@mail.com';

        $this->assertTrue($user->notify("hello"));
    }


    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User;

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            ->getMock();

        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify("Hello");
    }

}