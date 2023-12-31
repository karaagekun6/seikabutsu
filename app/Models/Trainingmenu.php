<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainingmenu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        ];
    
    
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
