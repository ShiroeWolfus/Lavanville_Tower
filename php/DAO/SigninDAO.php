<?php

class SigninDAO extends Controller
{
    public function register()
    {
        $newUser = new UserDao;

        if ($newUser->insert($_POST)) {
        }
    }
}