<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class UserController extends Controller
{
    public function index(User $user)
    {
        
    return $user->get();
    //
    }
    
}
