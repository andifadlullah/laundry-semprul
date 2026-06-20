<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $table = 'administrasis';
    protected $fillable = [
        'tanggal',
        'costumer_id',
        'karyawan_id',
        'biaya',
    ];

    public function costumer()
    {
        return $this->belongsTo(\App\Models\Costumer::class);
    }

    public function karyawan()
    {
        return $this->belongsTo(\App\Models\Karyawan::class);
    }
}