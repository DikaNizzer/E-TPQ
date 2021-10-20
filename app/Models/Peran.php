<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;

    protected $table = "peran";
 
    public function pengurus()
    {
    	return $this->belongsToMany('App\Models\Pengurus');
    }
}
