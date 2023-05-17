<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motor';
    protected $fillable = ([
        'motor_id',
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
        'kendaraan_id',
    ]);
}
