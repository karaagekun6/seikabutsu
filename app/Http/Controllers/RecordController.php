<?php

namespace App\Http\Controllers;


use App\Models\Record;
use App\Models\User;
use App\Models\Trainingmenu;
use App\Http\Requests\RecordRequest;
use Illuminate\Http\Request;


class RecordController extends Controller
{
    public function index(Record $record, User $user)
    {
       
        $users = User::withCount('records')->take(1)->get();
        //dd($users);
        return view('records/index')->with(['records'=> $record->get(),
        'users' => $user->get()]);
        
    }

        
    
        
    
    public function store (RecordRequest $request, Record $record, User $user)
    {
        $input = $request['record'];
        $input += ['user_id' => $request->user()->id];
        //$user = $request->user();
        //$user->login += 1;
        //$user->save();
        $record->fill($input)->save();
        return redirect('/records/' . $record->id,
                 );
    }    //
    
    public function show(Record $record)
{
    return view ('records.show')->with(['record' => $record]);
}    

    public function create(Record $record, User $user, Trainingmenu $trainingmenu)
{
        
    
    return view('records.create')->with(['trainingmenus' => $trainingmenu->get(), 
                                         'users' => $user->get()]); 
    
    }
    
    
    public function edit(Record $record)
{
    return view('records.edit')->with(['record' => $record]);
}

    
     public function update (RecordRequest $request, Record $record, User $user)
    {
        $input_record = $request['record'];
        $input_record += ['user_id' => $request->user()->id];
        $record->fill($input_record)->save();
        return redirect('/records/' . $record->id);
    }    //
    
    public function delete(Record $record)
    {
        $record->delete();
        return redirect('/');
        
    }
}
