<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model;

class Buku extends Model{
    use HasFactory;

    protected $table = 'buku';

    protected $fillabel =[
        'id',
        'buku_id',
        'buku_judul',

    ];

}