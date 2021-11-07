<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengurus_peran extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDETAILPERAN';
    protected $table = "pengurus_peran";
    protected $foreignKey = 'pengurus_IDPENGURUS';

    protected $fillable = [
        'peran_IDPERAN',
        'pengurus_IDPENGURUS'
    ];
}
