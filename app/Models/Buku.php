<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'IDBUKU';
    protected $table = "buku";
    protected $dates = ['deleted_at'];
}
