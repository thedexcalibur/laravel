<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $dates = ['waktu'];
    protected $table = 'kursus';
    protected $fillable = [
        'namakursus',
        'deskripsi',
        'waktu',
        'lama',
    ];
}
