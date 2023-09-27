<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Trainingmenu;
use Illuminate\Http\Request;


class TrainingmenuController extends Controller
{
    public function index(Trainingmenu $trainingmenu)
    {
        
    return $trainingmenu->get();
    //
    }
    
    
    
}
