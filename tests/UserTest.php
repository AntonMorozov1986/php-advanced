<?php

namespace Tests;

use Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function userDataProvider(): array
    {
        return [
            array(['id' => 1, 'name' => 'testUser', 'email' => 'test@test.ru']),
            array(['id' => 10, 'name' => 'user10', 'email' => 'test10@test.ru']),
            array(['id' => 500, 'name' => 'user500', 'email' => 'test500@test.ru']),
        ];
    }

    /**
     * @dataProvider userDataProvider
     * @return void
     */
    public function test__construct($userData)
    {
        echo "test User constructor" . PHP_EOL;
        $user = new User($userData);
        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @dataProvider userDataProvider
     * @return void
     */
    public function testGetName($userData)
    {
        echo "test User->getName" . PHP_EOL;
        $user = new User($userData);
        $this->assertSame($userData['name'], $user->getName());
    }

    /**
     * @dataProvider userDataProvider
     * @return void
     */
    public function testGetId($userData)
    {
        echo "test User->getId" . PHP_EOL;
        $user = new User($userData);
        $this->assertSame($userData['id'], $user->getId());
    }

    /**
     * @dataProvider userDataProvider
     * @return void
     */
    public function testGetEmail($userData)
    {
        echo "test User->getEmail" . PHP_EOL;
        $user = new User($userData);
        $this->assertSame($userData['email'], $user->getEmail());
    }

    /**
     * @dataProvider  userDataProvider
     * @return void
     */
    public function testGetInfo($userData)
    {
        echo "test User->getInfo" . PHP_EOL;
        $userInfo = [
            'id' => $userData['id'],
            'name' => $userData['name'],
            'email' => $userData['email'],
        ];
        $user = new User($userData);
        $this->assertSame($userInfo, $user->getInfo());
    }
}
