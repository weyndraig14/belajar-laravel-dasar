<?php

namespace App\Services;

interface UserSevrice
{
    function login(string $user, string $password): bool;
}