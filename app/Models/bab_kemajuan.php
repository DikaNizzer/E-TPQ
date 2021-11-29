<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab_kemajuan extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDDETAILKEMAJUAN';
    protected $table = "bab_kemajuan";
    protected $foreignKey = 'bab_IDBAB';


    protected $fillable = [
        'bab_IDBAB',
        'kemajuan_IDKEMAJUAN'
    ];
}
