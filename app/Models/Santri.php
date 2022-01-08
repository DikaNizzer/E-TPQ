<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Santri extends Authenticatable
{

    use SoftDeletes;
    protected $primaryKey = 'IDSANTRI';
    protected $table = "santri";
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function kemajuan()
    {
    	return $this->belongsToMany('App\Models\Kemajuan')->withTimestamps();
    }
}
