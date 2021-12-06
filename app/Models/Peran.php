<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peran extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDPERAN';
    protected $table = "peran";

    public function pengurus()
    {
    	return $this->belongsToMany('App\Models\Pengurus')->withTimestamps();
    }

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
