<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SignupController extends Controller
{
    function getSignup()
    {
        return view('signup');
    }


}