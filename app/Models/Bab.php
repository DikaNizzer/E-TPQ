<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bab extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'IDBAB';
    protected $table = "bab";
    protected $dates = ['deleted_at'];

    public function buku(){
        return $this->belongsTo('App\Models\Buku');
    }
}
