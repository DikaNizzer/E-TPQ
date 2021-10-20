<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDPENGURUS';
    protected $table = "pengurus";
 
    public function peran()
    {
    	return $this->belongsToMany('App\Models\Peran');
    }
}
