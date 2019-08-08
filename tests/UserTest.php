<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';

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
}