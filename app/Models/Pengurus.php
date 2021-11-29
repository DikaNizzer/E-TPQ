<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengurus extends Authenticatable
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

    public function kemajuan()
    {
    	return $this->belongsToMany('App\Models\Kemajuan')->withTimestamps();
    }
}
