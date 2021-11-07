<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDPENGURUS';
    protected $table = "pengurus";

    protected $fillable = [
        'IDPENGURUS',
        'NAMA',
        'EMAIL',
        'HP',
        'GENDER',
        'PASSWORD',
        'AKTIF'

    ];

    public function peran()
    {
    	return $this->belongsToMany('App\Models\Peran')->withTimestamps();
    }
}
