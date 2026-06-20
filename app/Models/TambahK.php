<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TambahK extends Model
{
    protected $table = 'karyawans';

    protected $fillable = [
        'kode',
        'nama',
        'posisi',
        'nohp',
    ];
}