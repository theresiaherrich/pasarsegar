<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactuses';
    protected $fillable = [
        'nama',
        'email',
        'pesan'
    ];
    public function user() {
        return $this->belongsTo(User::class,'nama','email');
    }
}
