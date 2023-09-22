<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Record extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    protected $fillable = [
        'date',
        'weight',
        'BFP',
        'body',
        'login',
        'user_id',
        'trainingmenu_id'
        
        ];
        
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    
    public function trainingmenu()
    {
        return $this->belongsTo(Trainingmenu::class);
    }
}

