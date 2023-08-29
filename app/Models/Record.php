<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illunminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'weight',
        'BFP',
        'body',
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

