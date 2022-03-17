<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $visible = ['judul', 'ket', 'video'];
    protected $fillable = ['judul', 'ket', 'video'];
    public $timestamps = true;
}
