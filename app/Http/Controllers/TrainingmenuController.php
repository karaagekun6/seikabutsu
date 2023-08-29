<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class TrainingmenuController extends Controller
{
    public function index(Trainingmenu $trainingmenu)
    {
        
    return $trainingmenu->get();
    //
    }
    
}
