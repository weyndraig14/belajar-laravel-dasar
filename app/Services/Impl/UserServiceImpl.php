<?php

namespace App\Services\Impl;

use App\Services\UserServices;

class UserServicesImpl implements UserService
{

    private array $users = [
        "agung" => "sinaga"
    ];

    function login(string $user, string $password): bool
    {
        if(!isset($this->users[$user])) {
            return false;
        }

        $correctpassword = $this->users[$user];
        return  $password == $correctpassword;
    }
}