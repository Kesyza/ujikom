<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $visible = ['soal_id', 'waktu', 'jumlah_soal', 'nilai', 'status'];
    protected $fillable = ['soal_id', 'waktu', 'jumlah_soal', 'nilai', 'status'];
    public $timestamps = true;

    public function soall()
    {
        return $this->belongsTo('App\Models\Soal', 'soal_id');
    }
}
