<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        
    return $user->get();
    //
    }

    public function userstore(UserRequest $request, User $user)
    {   
        $input = $request['user'];
        $user->fill($input)->save();
        return redirect('/users/' . $user->id);
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

    
    public function userupdate(UserRequest $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
        return redirect('/users/' . $user->id);
    }    //
    
    public function userdelete(User $user)
    {
        $user->delete();
        return redirect('/');
        
    }
    
 
}
