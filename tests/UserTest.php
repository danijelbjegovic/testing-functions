<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User();
        $user->first_name = "Danijel";
        $user->surname = "Bjegovic";

        $this->assertEquals("Danijel Bjegovic", $user->getFullName());
    }
    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        $this->assertEquals("", $user->getFullName());
    }

    public function testUserHasFirstName()
    {
        $user = new User;

        $user->first_name = "Danijel";

        $this->assertEquals("Danijel", $user->first_name);
    }
    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mock_mailer);


        $user->email = 'dave@example.com';
        $this->assertTrue($user->notify("Hello"));
    }
}