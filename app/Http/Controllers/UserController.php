<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        
    return $user->get();
    //
    }
    public function usercreate()
{
    return view('records.usercreate');
}

  public function usershow(User $user)
{
    return view('records.usershow');
}
}
