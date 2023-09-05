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

    public function store(User $user)
    {
        $input = $user['user'];
        $input += ['user_id' => $request->user()->id];
        $user->fill($input)->save();
        return redirect('/users/usershow' . $user->id);
    }
     public function usercreate(User $user)
     {
        return view('users.usercreate')->with(['users' => $user->get()]);
     }
     
     public function usershow(User $user)
     {
        return view ('users.usershow')->with(['user' => $user]);
     }    

    
    public function useredit(User $user)
    {
        return view('users.useredit')->with(['user' => $user]);
    }

    
    public function update (UserRequest $request, User $user)
    {
        $input_user = $request['user'];
        $input_user += ['user_id' => $request->user()->id];
        $user->fill($input)->save();
        return redirect('/users/usershow' . $user->id);
    }    //
 
}
