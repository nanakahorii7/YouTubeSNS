<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users=UserorderBy('id','desc')->pagenate(9);
        
        return view('welcome', [
            'users' => $users,
            ]);
    }
}
