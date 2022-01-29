<?php

use PHPUnit\Framework\TestCase;

class MailerStaticTest extends TestCase
{

    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(MailerStatic::send('dave@example.com', 'hello'));
    }


    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        MailerStatic::send("","");
    }
}