<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TambahC extends Model
{
    protected $table = 'costumers';

    protected $fillable = [
        'kode',
        'nama',
        'jenkel',
        'status',
        'alamat',
    ];
}