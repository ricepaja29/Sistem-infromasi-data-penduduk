<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data_penduduk extends Model
{
    protected $fillable = ['nama', 'alamat', 'agama', 'jenis_kelamin', 'tahun_lahir'];
    protected $casts = [
        'tahun_lahir' => 'date',
    ];
}
