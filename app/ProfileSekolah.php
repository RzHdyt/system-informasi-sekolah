<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    protected $table = 'profile_sekolahs';
    protected $fillable = [
        'judul',
        'isi',
        'tahun'
    ];
}
