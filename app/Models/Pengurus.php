<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;


    protected $table = "pengurus";
    protected $primaryKey = 'IDPENGURUS';

    // protected $fillable = [
    //     'IDPENGURUS',
    //     'NAMA',
    //     'EMAIL',
    //     'HP',
    //     'GENDER',
    //     'PASSWORD',
    //     'AKTIF'

    // ];
    protected $guarded = [];

    public function peran()
    {
    	return $this->belongsToMany('App\Models\Peran')->withTimestamps();
    }
}
