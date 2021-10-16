<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Santri extends Model
{

    use SoftDeletes;
    protected $primaryKey = 'IDSANTRI';
    protected $table = "santri";
    protected $dates = ['deleted_at'];
}
