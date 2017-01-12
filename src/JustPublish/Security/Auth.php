<?php

/*
 * This file is part of JustPublish.
 *
 * (c) Max L <qwerty@fatmax.se>
 * 
 * This work is free. You can redistribute it and/or modify it under the
 * terms of the Do What The Fuck You Want To Public License, Version 2,
 * as published by Sam Hocevar. See http://www.wtfpl.net/ for more details.
 */

namespace JustPublish\Security;

use JustPublish\Store\SessionManager;

class Auth
{
    private $storage;

    public function __construct(SessionManager $sessionManager)
    {
        $this->session = $sessionManager; 
    }

    public function login($user, $password)
    {
        if (false === password_verify($password, $user->getPassword())) {
            $this->logout();

            return false;
        }

        // sign in user

        return true;
    }

    public function logout()
    {
        
        // sign out user
    }
}