<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'date_of_birth',
        'phone',
        'address',
        'photo'
    ];
}
