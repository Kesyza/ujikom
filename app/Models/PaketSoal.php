<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
    use HasFactory;

    protected $visible = ['pilih_paket'];
    protected $fillable = ['pilih_paket'];
    public $timestamps = true;

    public function soall()
    {
        return $this->hasMany('App\Models\Soal', 'nama_mapel_id');
    }
}
