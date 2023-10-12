<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'telp',
        'email',
        'facebook',
        'insta'
    ];
}
