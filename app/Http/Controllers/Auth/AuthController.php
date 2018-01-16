<?php

namespace App\HTTP\Controllers\Auth;

use App\HTTP\Controllers\Controller;
use App\AuthenticatesUser;
use App\LoginToken;
use Auth;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthenticatesUser $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin()
    {
        $this->auth->invite();

        return 'Sweet - go check thst email, yo.';
    }

    public function authenticate(LoginToken $token)
    {
        $this->auth->login($token);

        return 'You are now signed in, ' . auth()->user()->name;
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}