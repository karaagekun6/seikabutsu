<?php

namespace App\Http\Controllers;


use App\Models\Record;
use App\Models\User;
use App\Models\Trainingmenu;
use App\Http\Requests\RecordRequest;
use Illuminate\Http\Request;


class RecordController extends Controller
{
    public function index(Record $record)
    {
        return view('records/index')->with(['records'=> $record->get()]);
        
    }
    public function show(Record $record)
{
    return view ('records.show')->with(['record' => $record]);
}    
    public function create(User $user)
{
    return view('records.create')->with(['users' => $user->get()]);
}

    public function edit(Record $record)
{
    return view('records.edit')->with(['record' => $record]);
}


    public function store (RecordRequest $request, Record $record)
    {
        $input = $request['record'];
        $input += ['user_id' => $request->user()->id];
        $record->fill($input)->save();
        return redirect('/records/' . $record->id);
    }    //
    
     public function update (RecordRequest $request, Record $record)
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
