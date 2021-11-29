<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kemajuan extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDKEMAJUAN';
    protected $table = "kemajuan";
    protected $guarded = [];

    public function pengurus(){
        return $this->belongsTo('App\Models\Pengurus');
    }

    public function santri(){
        return $this->belongsTo('App\Models\Santri');
    }

    public function bab()
    {
    	return $this->belongsToMany('App\Models\Bab')->withTimestamps();
    }

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
