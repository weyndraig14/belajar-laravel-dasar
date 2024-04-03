<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userServices;

    protected function setUp():void
    {
        parent::setUp();

        $this->userservice = $this->app->make(UserService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("agung", "random"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("agung", "agung"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("agung", "random"));
    }
}

