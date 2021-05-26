<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemberitahuan extends Model
{
    protected $table = 'pemberitahuans';
    protected $fillable = [
        'judul',
        'isi',
        'status',

        'photo_id'
    ];

    public function photoPemberitahuan()
    {
        return $this->belongsTo(Photo::class);
    }
}
