<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = [
        'nomer_induk',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'gender',
        'agama',
        'mapel',
        'jabatan',
        'status',

        'photo_id'
    ];

    public function photoGuru()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }
}
